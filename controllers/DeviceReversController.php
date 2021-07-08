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


class DeviceReversController extends Controller{
    


  
    public function getAdd($reversId){


        $reversModel = new ReversModel($this-> getDatabaseConnection());
        $revers=$reversModel->getByID($reversId);
        $this->set('revers',$revers);
     

        
        $revsModel = new DeviceReversModel($this-> getDatabaseConnection());
        $revs=$revsModel->getReverses($reversId);
        $this->set('revs',$revs);
        

        $deviceModel=new DeviceModel($this->getDatabaseConnection());
        $devices = $deviceModel-> getAlldevices();
        $this->set('devices',$devices);

        $deviceModel=new DeviceModel($this->getDatabaseConnection());
        $nmag = $deviceModel-> getNonMagDevices();
        $this->set('nmag',$nmag);



        $deviceModel=new DeviceModel($this->getDatabaseConnection());
        $mag = $deviceModel-> getMagDevices();
        $this->set('mag',$mag);

        

       
       


       
        #print_r($devices);
        

       # $magDevModel=new DeviceModel($this->getDatabaseConnection());
       # $magDev = $magDevModel-> getMagDevices();
       # $this->set('magDev',$magDev);
        #print_r($magDev);

       # $nonMagDevModel=new DeviceModel($this->getDatabaseConnection());
       # $nonMagDev = $nonMagDevModel-> getNonMagDevices();
       # $this->set('nonMagDev',$nonMagDev);


        }


    public function postAdd($reversId){
        $device_id = filter_input(INPUT_POST, 'device_id', FILTER_SANITIZE_STRING);
        $ispravan = filter_input(INPUT_POST, 'ispravan', FILTER_SANITIZE_STRING);
     
        $reversModel = new ReversModel($this->getDatabaseConnection());
        $revers = $reversModel->getById($reversId);
        $this->set('revers',$revers);
        $deviceModel=new DeviceModel($this->getDatabaseConnection());
     
    
      
        if($revers->type==='zaduzenje' ){

            $deviceModel->editById($device_id,['location_id'=>$revers->location_id]);   
            $deviceModel->editByID($device_id,['korisnik'=>$revers->revers_holder]);
        } else if($revers->type==='razduzenje'&& $ispravan==='ne'){
            $deviceModel->editById($device_id,['location_id'=>27]); 
            $deviceModel->editByID($device_id,['korisnik'=>'']);
        }else if ($revers->type === 'razduzenje' && $ispravan === 'zaTehnicki') {
            $deviceModel->editById($device_id, ['location_id' => 48]);
            $deviceModel->editByID($device_id, ['korisnik' => '']);
        }else{
            
            $deviceModel->editById($device_id,['location_id'=>25]);   
            $deviceModel->editByID($device_id,['korisnik'=>'']);
        }


        $deviceReversModel = new DeviceReversModel($this->getDatabaseConnection());   
        $deviceReversId = $deviceReversModel->add([
            'revers_id' => $reversId,
            'device_id'=>$device_id
        ]); 
        if ($deviceReversId) {
            $this->redirect(\Configuration::BASE .'\dodaj-opremu\\'.$reversId);
            $this->set('message', 'Uspesno dodat model');    
           }  

          

        
        
      
    
    }






    public function deviceHistory(){
        $devsModel = new DeviceReversModel($this-> getDatabaseConnection());
        $devices=$devsModel->devHistory();
        $this->set('devices',$devices);


    }
    

}