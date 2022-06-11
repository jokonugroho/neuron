<?php
class myObject{
    //membuat sebuah static property
    static $instance = 0;

    public function __construct($instance) {
        // melakukan increment terhadap property instance
        $this->instance = ++self::$instance;
    }

    public function __clone()
    {
        $this->instance = ++self::$instance;
    }


}
// membuat object yang merupakan instance dari class myObject
$object1 = new myObject(1);
print_r($object1);

// membuat proses clone dari $object1
$object2 = clone $object1;
print_r($object2);