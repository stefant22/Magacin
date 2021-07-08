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

class DeviceModel extends Model {

 


    protected function getFields(): array {
        return [
            'device_id'      => new Field((new NumberValidator())->setIntegerLength(11), false),
            'bar_code'           => new Field((new StringValidator())->setMaxLength(255) ),
            'serial_number'           => new Field((new StringValidator())->setMaxLength(255) ),
            'model_id'     => new Field((new NumberValidator())->setIntegerLength(11)),
            'location_id'     => new Field((new NumberValidator())->setIntegerLength(11)),
            'garancija'     => new Field((new StringValidator())->setMaxLength(255) ),
            'korisnik'     => new Field((new StringValidator())->setMaxLength(255) )
            
        ];
    }
 
  



    public function magacinStanjeRacunari():array{
        $sql='SELECT
           Count(model.model_name) AS br,
        model_type.model_type_name,
        model.model_name,
        model.ram,
        model.processor,
        model.ports,
        model.model_description
        FROM
        device
        INNER JOIN model ON device.model_id = model.model_id
        INNER JOIN model_type ON model.model_type_id = model_type.model_type_id
        INNER JOIN location ON device.location_id = location.location_id
        WHERE
        location.location_id = 25 AND
        model.model_type_id = 1
        GROUP BY
        model.model_name
    ;';
        $prep=$this->getConnection()->prepare($sql);
        $res=$prep->execute();
        $monitors=[];
        if($res){
            $monitors=$prep->fetchAll(PDO::FETCH_OBJ);
        }
        return $monitors;
    
    }


    public function magacinStanjeLaptopovi():array{
        $sql='SELECT
        Count(model.model_name) AS br,
        model_type.model_type_name,
        model.model_name,
        model.ram,
        model.processor,
        model.ports,
        model.model_description
        FROM
        device
        INNER JOIN model ON device.model_id = model.model_id
        INNER JOIN model_type ON model.model_type_id = model_type.model_type_id
        INNER JOIN location ON device.location_id = location.location_id
        WHERE
        location.location_id = 25 AND
        model.model_type_id = 5
        GROUP BY
        model.model_name
        
    ;';
        $prep=$this->getConnection()->prepare($sql);
        $res=$prep->execute();
        $monitors=[];
        if($res){
            $monitors=$prep->fetchAll(PDO::FETCH_OBJ);
        }
        return $monitors;
    
    }




    public function magacinStanjeMonitori():array{
        $sql='SELECT
       Count(model.model_name) AS br,
        model_type.model_type_name,
        model.model_name,
        model.inch,
        model.ports,
        model.model_description
        FROM
        device
        INNER JOIN model ON device.model_id = model.model_id
        INNER JOIN model_type ON model.model_type_id = model_type.model_type_id
        INNER JOIN location ON device.location_id = location.location_id
        WHERE
        location.location_id = 25 AND
        model.model_type_id = 2
        GROUP BY
        model.model_name
    ;';
        $prep=$this->getConnection()->prepare($sql);
        $res=$prep->execute();
        $monitors=[];
        if($res){
            $monitors=$prep->fetchAll(PDO::FETCH_OBJ);
        }
        return $monitors;
    
    }


    public function magacinStanjeTelefoni():array{
        $sql='SELECT
         Count(model.model_name) AS br,
        model_type.model_type_name,
        model.model_name,
        model.model_description
        FROM
        device
        INNER JOIN model ON device.model_id = model.model_id
        INNER JOIN model_type ON model.model_type_id = model_type.model_type_id
        INNER JOIN location ON device.location_id = location.location_id
        WHERE
        location.location_id = 25 AND
        model.model_type_id = 3
        GROUP BY
        model.model_name
    ;';
        $prep=$this->getConnection()->prepare($sql);
        $res=$prep->execute();
        $monitors=[];
        if($res){
            $monitors=$prep->fetchAll(PDO::FETCH_OBJ);
        }
        return $monitors;
    
    }


    public function magacinStanjeStampaci():array{
        $sql='SELECT
         Count(model.model_name) AS br,
        model_type.model_type_name,
        model.model_name,
        model.model_description
        FROM
        device
        INNER JOIN model ON device.model_id = model.model_id
        INNER JOIN model_type ON model.model_type_id = model_type.model_type_id
        INNER JOIN location ON device.location_id = location.location_id
        WHERE
        location.location_id = 25 AND
        model.model_type_id = 4
        GROUP BY
        model.model_name
    ;';
        $prep=$this->getConnection()->prepare($sql);
        $res=$prep->execute();
        $monitors=[];
        if($res){
            $monitors=$prep->fetchAll(PDO::FETCH_OBJ);
        }
        return $monitors;
    
    }

    public function magacinStanjeSkeneri():array{
        $sql='SELECT
         Count(model.model_name) AS br,
        model_type.model_type_name,
        model.model_name,
        model.model_description
        FROM
        device
        INNER JOIN model ON device.model_id = model.model_id
        INNER JOIN model_type ON model.model_type_id = model_type.model_type_id
        INNER JOIN location ON device.location_id = location.location_id
        WHERE
        location.location_id = 25 AND
        model.model_type_id = 6
        GROUP BY
        model.model_name
    ;';
        $prep=$this->getConnection()->prepare($sql);
        $res=$prep->execute();
        $monitors=[];
        if($res){
            $monitors=$prep->fetchAll(PDO::FETCH_OBJ);
        }
        return $monitors;
    
    }

    public function getAllbyModelID($id): array{
        $sql='select bar_code,korisnik, garancija,serial_number,model.model_id,model.model_description,model.inch,model.ports,model_type.model_type_name, model.model_name, model.ram,model.processor ,location.location_name
        from device
                JOIN model on device.model_id=model.model_id 
                INNER JOIN model_type on model.model_type_id=model_type.model_type_id 
                INNER JOIN location on device.location_id=location.location_id 
                
                where model.model_id=?
                ';
        $prep=$this->getConnection()->prepare($sql);
        $res=$prep->execute([$id]);
        $monitors=[];
        if($res){
            $monitors=$prep->fetchAll(PDO::FETCH_OBJ);
        }
        return $monitors;
    }

    public function getAlldevices(): array{
        $sql='SELECT
        device.device_id,
        device.bar_code, 
        device.garancija, 
        device.korisnik, 
        location.location_name, 
        model.model_name, 
        model.ram, 
        model.model_id,
        model.processor, 
        model.inch, 
        model.ports, 
        model.model_description,
        model_type.model_type_name
    FROM
        device
        INNER JOIN
        location
        ON 
            device.location_id = location.location_id
        INNER JOIN
        model
        ON 
            device.model_id = model.model_id
        INNER JOIN
        model_type
        ON 
            model.model_type_id = model_type.model_type_id ORDER BY device.bar_code
        ';
        $prep=$this->getConnection()->prepare($sql);
        $res=$prep->execute();
        $monitors=[];
        if($res){
            $monitors=$prep->fetchAll(PDO::FETCH_OBJ);
        }
        return $monitors;
    }







    

    public function getAllbyModeltypeID($modelTypeID): array{
        $sql='select bar_code, garancija, serial_number,model.model_id,model.model_description,model.inch,model.ports,model_type.model_type_name, model.model_name, model.ram,model.processor from device
        JOIN model on device.model_id=model.model_id INNER JOIN model_type on model.model_type_id=model_type.model_type_idwhere model.model_type_id=?';
        $prep=$this->getConnection()->prepare($sql);
        $res=$prep->execute($modelTypeID);
        $monitors=[];
        if($res){
            $monitors=$prep->fetchAll(PDO::FETCH_OBJ);
        }
        return $monitors;

    }



    
    public function getKorisnik($korisnik){
        $sql='SELECT
        device.korisnik
    FROM
        device
    WHERE
        device.korisnik = ?';
        $prep=$this->getConnection()->prepare($sql);

        $res=$prep->execute($modelTypeID);
        $korisnici=[];
        if($res){
            $korisnici=$prep->fetchAll(PDO::FETCH_OBJ);
        }
        return $korisnici;


    }

    public function getAllBySearch(string $keywords){
        $sql ='SELECT DISTINCT device.korisnik FROM device WHERE device.korisnik LIKE ?';
        
        $keywords='%' . $keywords . '%';
        $prep=$this->getConnection()->prepare($sql);
        if(!$prep){
            return [];
        }

        $res = $prep->execute([$keywords]);
        If(!$res){
            return[];
        }

        return $prep->fetchAll(PDO::FETCH_OBJ);

        


    }

    public function deviceHistory(string $devId) {

        $sql="SELECT
        device_revers.device_id, 
        device_revers.revers_id, 
        device.device_id, 
        model.model_name, 
        revers.location_id, 
        location.location_name, 
        revers.revers_holder, 
        revers.date, 
        revers.type, 
        revers.administrator, 
        device.bar_code
    FROM
        device_revers
        INNER JOIN
        revers
        ON 
            device_revers.revers_id = revers.revers_id
        INNER JOIN
        device
        ON 
            device_revers.device_id = device.device_id
        INNER JOIN
        model
        ON 
            device.model_id = model.model_id
        INNER JOIN
        location
        ON 
            device.location_id = location.location_id AND
            revers.location_id = location.location_id
    WHERE
        device_revers.device_id = ?;";
        

$prep=$this->getConnection()->prepare($sql);
        $res=$prep->execute(array($devId));
        
        $devices=[];
        
        if($res){
            $devices=$prep->fetchAll(PDO::FETCH_OBJ);
        }
        return $devices;
        


    }



    public function zaTehnickiStanjeMonitori():array{
        $sql='SELECT
       Count(model.model_name) AS br,
        model_type.model_type_name,
        model.model_name,
        model.inch,
        model.ports,
        model.model_description
        FROM
        device
        INNER JOIN model ON device.model_id = model.model_id
        INNER JOIN model_type ON model.model_type_id = model_type.model_type_id
        INNER JOIN location ON device.location_id = location.location_id
        WHERE
        location.location_id = 48 AND
        model.model_type_id = 2
        GROUP BY
        model.model_name
    ;';
        $prep=$this->getConnection()->prepare($sql);
        $res=$prep->execute();
        $monitors=[];
        if($res){
            $monitors=$prep->fetchAll(PDO::FETCH_OBJ);
        }
        return $monitors;
    
    }



     
    public function zaTehnickiStanjeRacunari():array{
        $sql='SELECT
           Count(model.model_name) AS br,
        model_type.model_type_name,
        model.model_name,
        model.ram,
        model.processor,
        model.ports,
        model.model_description
        FROM
        device
        INNER JOIN model ON device.model_id = model.model_id
        INNER JOIN model_type ON model.model_type_id = model_type.model_type_id
        INNER JOIN location ON device.location_id = location.location_id
        WHERE
        location.location_id = 48 AND
        model.model_type_id = 1
        GROUP BY
        model.model_name
    ;';
        $prep=$this->getConnection()->prepare($sql);
        $res=$prep->execute();
        $monitors=[];
        if($res){
            $monitors=$prep->fetchAll(PDO::FETCH_OBJ);
        }
        return $monitors;
    
    }





    public function getMagDevices(): array{
        $sql='SELECT
        device.device_id, 
        device.bar_code, 
        device.garancija, 
        device.korisnik, 
        location.location_name, 
        model.model_name, 
        model.ram, 
        model.model_id, 
        model.processor, 
        model.inch, 
        model.ports, 
        model.model_description, 
        model_type.model_type_name
    FROM
        device
        INNER JOIN
        location
        ON 
            device.location_id = location.location_id
        INNER JOIN
        model
        ON 
            device.model_id = model.model_id
        INNER JOIN
        model_type
        ON 
            model.model_type_id = model_type.model_type_id
    WHERE
        device.location_id = 25 or device.location_id = 48
    ORDER BY
        device.bar_code ASC
        ';
        $prep=$this->getConnection()->prepare($sql);
        $res=$prep->execute();
        $monitors=[];
        if($res){
            $monitors=$prep->fetchAll(PDO::FETCH_OBJ);
        }
        return $monitors;
    }



    public function getNonMagDevices(): array{
        $sql='SELECT
        device.device_id, 
        device.bar_code, 
        device.garancija, 
        device.korisnik, 
        location.location_name, 
        model.model_name, 
        model.ram, 
        model.model_id, 
        model.processor, 
        model.inch, 
        model.ports, 
        model.model_description, 
        model_type.model_type_name
    FROM
        device
        INNER JOIN
        location
        ON 
            device.location_id = location.location_id
        INNER JOIN
        model
        ON 
            device.model_id = model.model_id
        INNER JOIN
        model_type
        ON 
            model.model_type_id = model_type.model_type_id
    WHERE
        device.location_id != 25
    ORDER BY
        device.bar_code ASC
        ';
        $prep=$this->getConnection()->prepare($sql);
        $res=$prep->execute();
        $monitors=[];
        if($res){
            $monitors=$prep->fetchAll(PDO::FETCH_OBJ);
        }
        return $monitors;
    }

    


  
}