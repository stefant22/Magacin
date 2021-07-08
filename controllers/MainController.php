<?php
namespace App\Controllers;
use App\Core\DatabaseConnection;
use App\Models\DeviceModel;
use App\models\ModelTypeModel;
use App\models\LocationModel;

use App\Core\Controller;


class MainController extends Controller{

  

public function home(){

 

    $deviceModel = new DeviceModel($this->getDatabaseConnection());
    $devices = $deviceModel->getAlldevices();
    $this->set('devices',$devices);

    $locationModel= new LocationModel($this->getDatabaseConnection() );
    $locations= $locationModel->getAll();
    $this->set('locations',$locations);


   
    
    
}

public function index(){
    $deviceModel = new DeviceModel($this->getDatabaseConnection());
    $devices = $deviceModel->getAlldevices();
    $this->set('devices',$devices);
}



}