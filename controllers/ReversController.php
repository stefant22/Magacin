<?php
namespace App\Controllers;
use App\Core\DatabaseConnection;
use App\Models\ModelTypeModel;
use App\Models\DeviceModel;
use App\Models\ModelModel;
use App\Models\ReversModel;
use App\Models\DeviceReversModel;
use App\Models\LocationModel;
use App\Core\Controller;


class ReversController extends Controller{

  

public function show(){
    $ReversModel = new ReversModel($this->getDatabaseConnection() );
    $reverses = $ReversModel->allRevs();
    $this->set('reverses',$reverses);


    $locationModel= new LocationModel($this->getDatabaseConnection() );
    $locations= $locationModel->getAll();
    $this->set('locations',$locations);


    
    
}



public function revers($reversID){
    $deviceReversModel = new DeviceReversModel($this-> getDatabaseConnection());
    $devices=$deviceReversModel->getReverses($reversID);
    $this->set('devices',$devices);
    $reversModel = new ReversModel($this->getDatabaseConnection() );
    $revers = $reversModel->revByID($reversID);
    $this->set('revers',$revers);
    //print_r($revers);
    
    


}

public function getAdd(){
    $locationModel= new LocationModel($this->getDatabaseConnection() );
    $locations= $locationModel->getAll();
    $this->set('locations',$locations);

    
    }



    public function postAdd(){

        $revers_holder = filter_input(INPUT_POST, 'revers_holder', FILTER_SANITIZE_STRING);
        $location_id = filter_input(INPUT_POST, 'location_id', FILTER_SANITIZE_STRING);
       $type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);
       $administrator = filter_input(INPUT_POST, 'administrator', FILTER_SANITIZE_STRING);
    
    
        $reversModel = new ReversModel($this->getDatabaseConnection());
        
        $reversId = $reversModel->add([
            'revers_holder' => $revers_holder,
            'location_id'=>$location_id,
            "type"=>$type,
            'administrator' => $administrator
           
        ]);
    
        if ($reversId) {
            $this->redirect(\Configuration::BASE .'\reversi');
 

     
        }
    
        $this->set('message', 'Doslo je do greske: Nije moguce dodati ovu kategoriju!');
     
    
    }


    public function zad($kor){
        $reversModel = new ReversModel($this->getDatabaseConnection());
        $podaci=$reversModel->zadPoKor($kor);
        $this->set('podaci',$podaci);
        


    }

public function pAdd(){

    $reversModel = new ReversModel($this->getDatabaseConnection());


}

    

}