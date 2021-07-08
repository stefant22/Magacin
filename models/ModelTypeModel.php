<?php
namespace App\Models;
use App\Core\DatabaseConnection;
use App\Core\Model;
use \PDO;

class ModelTypeModel extends Model {

    protected function getFields(): array {
        return [
            'model_type_id'      => new Field((new NumberValidator())->setIntegerLength(11), false),
           
            'model_type_name'           => new Field((new StringValidator())->setMaxLength(255) )
        ];
    }
 





    public function getAllbyModeltypeID($modelTypeID): array{
        $sql='SELECT
        device.bar_code,
        device.korisnik,
        device.serial_number,
        device.garancija,
        
        model.model_name,
        model.ram,
        model.processor,
        model.inch,
        model.model_id,
        model.ports,
        location.location_name,
        model.model_description,
        model_type.model_type_name,
        model_type.model_type_id
        FROM
        device
        INNER JOIN model ON device.model_id = model.model_id
        INNER JOIN location ON device.location_id = location.location_id
        INNER JOIN model_type ON model.model_type_id = model_type.model_type_id where model.model_type_id=?';
        $prep=$this->getConnection()->prepare($sql);
        $res=$prep->execute([$modelTypeID]);
        $monitors=[];
        if($res){
            $monitors=$prep->fetchAll(PDO::FETCH_OBJ);
        }
        return $monitors;

    }



}

