<?php
//adalah sebuah class yang abstark method tidak di implementasikan pada class itu sendiri 
abstract class Car{
    public $merk;
    abstract public function create($data):string;
    abstract public function read($id);
    abstract public function update($id, $data);
    abstract public function delete($id);
}

class audi extends Car{
    public function create($data):string{
        return "create audi";
    }
    public function read($id){
        return "read audi";
    }
    public function update($id, $data){
        return "update audi";
    }
    public function delete($id){
        return "delete audi";
    }
}

$audi = New audi();
echo $audi->create('dasd');
?>