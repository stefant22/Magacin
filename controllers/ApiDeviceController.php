<?php 
namespace App\Controllers;
use App\Core\ApiController;
use App\Models\DeviceModel;

class ApiDeviceController extends \App\Core\ApiController{

    public function zaTehnickiStanje(){
        $deviceModel = new DeviceModel($this->getDatabaseConnection());
        $devices = $deviceModel->zaTehnickiStanjeRacunari();
        $this->set('devices',$devices);
     
    
        $monitori = $deviceModel->zaTehnickiStanjeMonitori();
        $this->set('monitori',$monitori);
        
        $stampaci = $deviceModel->magacinStanjeStampaci();
        $this->set('stampaci',$stampaci);
    
     
    }


    
}