<?php
namespace App\Models;
use App\Core\DatabaseConnection;
use App\Core\Model;
use App\Core\Field;
use App\Validators\NumberValidator;
use App\Validators\DateTimeValidator;
use App\Validators\StringValidator;
use App\Validators\BitValidator;
use \PDO;

class DeviceReversModel extends Model {


    protected function getFields(): array {
        return [
            'revers_id'      => new Field((new NumberValidator())->setIntegerLength(11)),
            'device_id'           => new Field((new NumberValidator())->setIntegerLength(11))
        ];
    }


    public function changeLocation($deviceID){
      

    }
public function getReverses($reversID){
    $sql = 'SELECT
    device.bar_code,
    device.serial_number,
    location.location_name,
    model.model_name,
    model_type.model_type_name,
    revers.revers_holder,
    revers.date
    FROM
    device
    INNER JOIN device_revers ON device_revers.device_id = device.device_id
    INNER JOIN location ON device.location_id = location.location_id
    INNER JOIN model ON device.model_id = model.model_id
    INNER JOIN model_type ON model.model_type_id = model_type.model_type_id
    INNER JOIN revers ON device_revers.revers_id = revers.revers_id
    
    WHERE
    device_revers.revers_id = ?
    ';
    $prep=$this->getConnection()->prepare($sql);
    $res=$prep->execute([$reversID]);
    $monitors=[];
    if($res){
        $monitors=$prep->fetchAll(PDO::FETCH_OBJ);
    }

    return $monitors;
}


public function devHistory(){

    $sql='SELECT
	device_revers.revers_id, 
	revers.revers_holder, 
	revers.type, 
	revers.date, 
	device.bar_code, 
	model.model_name, 
	model_type.model_type_name, 
	revers.location_id, 
	location.location_name
FROM
	device
	INNER JOIN
	device_revers
	ON 
		device.device_id = device_revers.device_id
	INNER JOIN
	model
	ON 
		device.model_id = model.model_id
	INNER JOIN
	model_type
	ON 
		model.model_type_id = model_type.model_type_id
	INNER JOIN
	revers
	ON 
		device_revers.revers_id = revers.revers_id
	INNER JOIN
	location
	ON 
		revers.location_id = location.location_id;';

$prep=$this->getConnection()->prepare($sql);
$res=$prep->execute();
$devices=[];
if($res){
    $devices=$prep->fetchAll(PDO::FETCH_OBJ);
}

return $devices;
        
}


    
  

   

    


  
}