<?php
namespace App\Controllers;
use App\Core\DatabaseConnection;
use App\Models\DeviceModel;
use App\Models\modelModel;
use App\Core\Controller;
use App\Models\LocationModel;

class LocationController extends Controller{

    public function ekspoziture(){
        $locationModel= new LocationModel($this->getDatabaseConnection() );
        $locations= $locationModel->getAll();
        $this->set('locations',$locations);


    }

    public function show($location){
        $locationModel= new LocationModel($this->getDatabaseConnection() );
        $ekspozitura= $locationModel->getDevByLoc($location);
        $this->set('ekspozitura',$ekspozitura);

    }

public function getAdd(){

}


public function postAdd(){
    
    $location_name = filter_input(INPUT_POST, 'location', FILTER_SANITIZE_STRING);
    $adress = filter_input(INPUT_POST, 'adress', FILTER_SANITIZE_STRING);

    $locationModel = new LocationModel($this->getDatabaseConnection());

    $locationId=$locationModel->add([
        'location_name' => $location_name,
        'adress'=>$adress
    ]);


    if ($locationId) {
        $this->redirect(\Configuration::BASE .'\ekspoziture');


 
    }
    
}



}