<?php
namespace App\Models;

use App\Core\Field;
use App\Core\Model;
use App\Validators\DateTimeValidator;
use App\Validators\NumberValidator;
use App\Validators\StringValidator;
use \PDO;

class ReversModel extends Model
{

    protected function getFields(): array
    {
        return [
            'revers_id' => new Field((new NumberValidator())->setIntegerLength(11), false),
            'location_id' => new Field((new StringValidator())->setMaxLength(255)),
            'revers_holder' => new Field((new StringValidator())->setMaxLength(255)),
            'date' => new Field((new DateTimeValidator())->allowDate()->allowTime(), false),
            'type' => new Field((new StringValidator())->setMaxLength(255)),
            'administrator' => new Field((new StringValidator())->setMaxLength(255)),
           
        ];
    }


public function allRevs(){
    $sql='SELECT
    location.location_name,
    revers.revers_id,
    revers.revers_holder,
    revers.type,
    revers.date

 
    FROM
    revers
    INNER JOIN location ON revers.location_id = location.location_id
    ORDER BY revers.revers_id DESC;';
    $prep=$this->getConnection()->prepare($sql);
    $res=$prep->execute();
    $monitors=[];
    if($res){
        $monitors=$prep->fetchAll(PDO::FETCH_OBJ);
    }
    return $monitors;





}







public function revByID(int $reversID){
    $sql="SELECT
	revers.revers_id, 
	revers.revers_holder, 
	revers.type, 
	revers.date, 
	revers.administrator, 
	location.location_name,
    location.adress
FROM
	revers
	INNER JOIN
	location
	ON 
		revers.location_id = location.location_id
WHERE
	revers.revers_id =?;";


$prep=$this->getConnection()->prepare($sql);
$res=$prep->execute([$reversID]);
$monitors=Null;
if($res){
    $monitors=$prep->fetch(PDO::FETCH_OBJ);
}

return $monitors;
    

}


public function zadPoKor($kor){
    $sql='SELECT
	device.bar_code, 
	device.serial_number, 
	model.model_name, 
	model.model_description, 
	model.ram, 
	model.processor, 
	model_type.model_type_name, 
	device.korisnik, 
	location.location_name
FROM
	device
	INNER JOIN
	model
	ON 
		device.model_id = model.model_id
	INNER JOIN
	model_type
	ON 
		model.model_type_id = model_type.model_type_id
	INNER JOIN
	location
	ON 
		device.location_id = location.location_id
WHERE
	device.korisnik = ? AND
    device.location_id != 25
    AND
    device.location_id != 27
    ';
    $prep=$this->getConnection()->prepare($sql);
    $res=$prep->execute([$kor]);
    $monitors=[];
    if($res){
        $monitors=$prep->fetchAll(PDO::FETCH_OBJ);
    }
    return $monitors;

}




 


}
