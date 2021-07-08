<?php
namespace App\Controllers;
use App\Core\DatabaseConnection;
use App\Models\DeviceModel;
use App\Models\modelModel;
use App\Core\Controller;
use App\Models\LocationModel;

class DeviceController extends Controller{

    public function edit($id){

        $locationModel= new LocationModel($this->getDatabaseConnection() );
        $locations= $locationModel->getAll();
        $this->set('locations',$locations);

        $deviceModel = new DeviceModel($this->getDatabaseConnection());
        $infos=$deviceModel ->getById($id);
        $this->set('infos',$infos);
       


    }
    
    public function postEdit($id){

        $bar_code = filter_input(INPUT_POST, 'bar_code', FILTER_SANITIZE_STRING);
        $model_id = filter_input(INPUT_POST, 'model_id', FILTER_SANITIZE_STRING);
        $serial_number = filter_input(INPUT_POST, 'serial_number', FILTER_SANITIZE_STRING);
        $location_id = filter_input(INPUT_POST, 'location_id', FILTER_SANITIZE_STRING);
        $garancija = filter_input(INPUT_POST, 'garancija', FILTER_SANITIZE_STRING);
        $korisnik = filter_input(INPUT_POST, 'korisnik', FILTER_SANITIZE_STRING);
       

        $deviceModel= new DeviceModel($this->getDatabaseConnection());
        $deviceModel->editById($id,['bar_code' => $bar_code, 'serial_number'=>$serial_number,'location_id'=>$location_id,'garancija'=>$garancija,'korisnik'=>$korisnik]);

        if($id){
            $this->redirect(\Configuration::BASE);
        }
      
    }

  

public function show($id){
    $deviceModel = new DeviceModel($this->getDatabaseConnection());
    $devices = $deviceModel->getAllbyModelID($id);
    $this->set('devices',$devices);

    
}

public function magacinStanje(){
    $deviceModel = new DeviceModel($this->getDatabaseConnection());
    $devices= $deviceModel->magacinStanjeRacunari();
    $this->set('devices',$devices);
   

    $laptopovi = $deviceModel->magacinStanjeLaptopovi();
    $this->set('laptopovi',$laptopovi);
 

    $monitori = $deviceModel->magacinStanjeMonitori();
    $this->set('monitori',$monitori);

    $telefoni = $deviceModel->magacinStanjeTelefoni();
    $this->set('telefoni',$telefoni);

    $stampaci = $deviceModel->magacinStanjeStampaci();
    $this->set('stampaci',$stampaci);

    $skeneri = $deviceModel->magacinStanjeSkeneri();
    $this->set('skeneri',$skeneri);
 
}


public function zaTehnickiStanje(){
    $deviceModel = new DeviceModel($this->getDatabaseConnection());
    $devices = $deviceModel->zaTehnickiStanjeRacunari();
    $this->set('devices',$devices);
 

    $monitori = $deviceModel->zaTehnickiStanjeMonitori();
    $this->set('monitori',$monitori);
    
    $stampaci = $deviceModel->magacinStanjeStampaci();
    $this->set('stampaci',$stampaci);

 
}


public function getAdd(){
    
    $modelModel= new ModelModel($this->getDatabaseConnection());
    $models=$modelModel->getAllSortModels();
    $this->set('models',$models);
 
    $locationModel= new LocationModel($this->getDatabaseConnection() );
    $locations= $locationModel->getAll();
    $this->set('locations',$locations);
    
    }
    
    public function postAdd(){
    
        $bar_code = filter_input(INPUT_POST, 'bar_code', FILTER_SANITIZE_STRING);
        $model_id = filter_input(INPUT_POST, 'model_id', FILTER_SANITIZE_STRING);
        $serial_number = filter_input(INPUT_POST, 'serial_number', FILTER_SANITIZE_STRING);
        $location_id = filter_input(INPUT_POST, 'location_id', FILTER_SANITIZE_STRING);
        $garancija = filter_input(INPUT_POST, 'garancija', FILTER_SANITIZE_STRING);
        $korisnik = filter_input(INPUT_POST, 'korisnik', FILTER_SANITIZE_STRING);
        
    
    
        $deviceModel = new DeviceModel($this->getDatabaseConnection());
        
        $deviceId = $deviceModel->add([
            'bar_code' => $bar_code,
            'model_id'=>$model_id,
            'serial_number'=>$serial_number,
            'location_id'=>$location_id,
            'garancija'=>$garancija,
            'korisnik'=>$korisnik
        ]);
    
        if ($deviceId) {
            $this->redirect(\Configuration::BASE);
        
     
        }
    
        $this->set('message', 'Doslo je do greske: Nije moguce dodati ovu kategoriju!');
     
    
    }


    private function normalizeKeyWords(string $keywords):string {
        $keywords = trim($keywords);
        $keywords = preg_replace ('/ + /', ' ', $keywords);
        return $keywords;

    }

public function search(){
    $deviceModel = new DeviceModel($this->getDatabaseConnection());
    $q = filter_input(INPUT_POST, 'q', FILTER_SANITIZE_STRING);

    $keywords = $this->normalizeKeyWords($q);
 

    $rezultat= $deviceModel->getAllBySearch($q);
    # print_r($rezultat);
   # exit;
    $this->set('rezultat',$rezultat);


}

public function deviceHistory($deviceID){

    $deviceModel= new DeviceModel($this->getDatabaseConnection());
    $devices=$deviceModel->deviceHistory($deviceID);
    $this->set('devices',$devices);
    


}



    



}