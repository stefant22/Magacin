<?php
namespace App\Controllers;
use App\Core\DatabaseConnection;
use App\Models\ModelTypeModel;
use App\Core\Controller;

class ModelTypeController extends Controller{

  

public function show($modelTypeID){
    $deviceModel = new ModelTypeModel($this->getDatabaseConnection() );
    $devices = $deviceModel->getAllbyModeltypeID($modelTypeID);
    $this->set('devices',$devices);
    
}

public function getAdd(){
 

}



}