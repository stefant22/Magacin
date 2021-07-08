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

class ModelModel extends Model {



    public function getAllSortModels(): array{
        $sql='SELECT model.model_name,model_type.model_type_name ,model.model_id FROM magacin.model 
        INNER JOIN model_type on model.model_type_id = model_type.model_type_id ORDER BY model.model_name;
        ';
        $prep=$this->getConnection()->prepare($sql);
        $res=$prep->execute();
        $models=[];
        if($res){
            $models=$prep->fetchAll(PDO::FETCH_OBJ);
        }
        return $models;
    }


    protected function getFields(): array {
        return [
            'model_id'      => new Field((new NumberValidator())->setIntegerLength(11), false),
            'model_name'           => new Field((new StringValidator())->setMaxLength(255) ),
            'model_description'           => new Field((new StringValidator())->setMaxLength(255) ),
            'ram'           => new Field((new StringValidator())->setMaxLength(255) ),
            'inch'           => new Field((new StringValidator())->setMaxLength(255) ),
            'processor'           => new Field((new StringValidator())->setMaxLength(255) ),
            'model_type_id'     => new Field((new NumberValidator())->setIntegerLength(11)),
            'ports'             => new Field((new StringValidator())->setMaxLength(255) )
        ];
    }
    
  

   

    


  
}