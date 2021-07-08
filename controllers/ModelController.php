<?php
namespace App\Controllers;
use App\Core\DatabaseConnection;
use App\Models\ModelTypeModel;
use App\Models\DeviceModel;
use App\Models\ModelModel;
use App\Core\Controller;


class ModelController extends Controller{

  



public function getAdd(){
    
$modelType= new ModelTypeModel($this->getDatabaseConnection());
$types=$modelType->getAll();
$this->set('types',$types);

}

public function postAdd(){

    $model_name = filter_input(INPUT_POST, 'model_name', FILTER_SANITIZE_STRING);
    $model_type_id = filter_input(INPUT_POST, 'model_type_id', FILTER_SANITIZE_STRING);
    $ram = filter_input(INPUT_POST, 'ram', FILTER_SANITIZE_STRING);
    $processor = filter_input(INPUT_POST, 'processor', FILTER_SANITIZE_STRING);
    $model_description = filter_input(INPUT_POST, 'model_description', FILTER_SANITIZE_STRING);
    $inch = filter_input(INPUT_POST, 'inch', FILTER_SANITIZE_STRING);
    $ports = filter_input(INPUT_POST, 'ports', FILTER_SANITIZE_STRING);
    


    $modelModel = new ModelModel($this->getDatabaseConnection());
    
    $modelId = $modelModel->add([
        'model_name' => $model_name,
        'model_type_id'=>$model_type_id,
        'ram'=>$ram,
        'processor'=>$processor,
        'model_description'=>$model_description,
        'inch'=>$inch,
        'ports'=>$ports
    ]);

    if ($modelId) {
        $this->redirect(\Configuration::BASE);
        $this->set('message', 'Uspesno dodat model');
 
    }

    $this->set('message', 'Doslo je do greske: Nije moguce dodati ovu kategoriju!');
 

}


public function show($modelTypeID){
    $deviceModel = new ModelTypeModel($this->getDatabaseConnection() );
    $devices = $deviceModel->getAllbyModeltypeID($modelTypeID);
    $this->set('devices',$devices);
    
}

}