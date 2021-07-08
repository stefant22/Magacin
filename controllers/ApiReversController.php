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


class ApiReversController extends \App\Core\ApiController{

    public function zad($kor){
        $reversModel = new ReversModel($this->getDatabaseConnection());
        $podaci=$reversModel->zadPoKor($kor);
        $this->set('podaci',$podaci);
        


    }


    
}