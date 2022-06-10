<?php
class process{

    function returnInteger():int
    {
        return 10;
    }

    function returnArray():array
    {
        return ['one', 'two', 'three'];
    }

    function returnString():string
    {
        return "some text";
    } 
    
    function returnBoolean():bool
    {
        return true;
    }
}

$integer = new process();
echo $integer->returnInteger();
echo "\n";
$integer = new process();
echo $integer->returnInteger();
echo "\n";

$array = new process();
print_r($array->returnArray());
echo "\n";

$string = new process();
echo $array->returnString();
echo "\n";

$boolean = new process();
var_dump($boolean->returnBoolean());

