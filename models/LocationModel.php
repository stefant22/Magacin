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

class LocationModel extends Model {


    protected function getFields(): array {
        return [
            'location_id'      => new Field((new NumberValidator())->setIntegerLength(11), false),
            'location_name'           => new Field((new StringValidator())->setMaxLength(255) ),
            'adress'           => new Field((new StringValidator())->setMaxLength(255) )
        ];
    }


    protected function getLocations (){
        $sql='SELECT * FROM location;';

        $prep=$this->getConnection()->prepare($sql);
        $res=$prep->execute();
        $locations=[];
        if($res){
            $locations=$prep->fetchAll(PDO::FETCH_OBJ);
        }
        return $locations;
    }


    public function getDevByLoc($location){
        $sql='SELECT
        device.bar_code, 
        device.serial_number, 
        model.model_name, 
        model.model_description, 
        model.ram, 
        model.model_id,
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
    WHERE location.location_name= ? order by device.korisnik';

        $prep=$this->getConnection()->prepare($sql);
        $res=$prep->execute([$location]);
        $locations=[];
        if($res){
            $locations=$prep->fetchAll(PDO::FETCH_OBJ);
        }
        return $locations;
    }




    
    
  

   

    


  
}