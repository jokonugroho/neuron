<?php
class Shape{
    const PI = 3.142;

    function __call($name, $args)
    {
        if($name =='area'){
            switch (count($args)) {
                case 0:
                    return 0 ;
                    break;
                case 1:
                    return self::PI*$args[0];
                    break;
                case 2:
                    return $args[0]*$args[1];
                    break;
                default:
                    return 0 ;
                    break;
            }
        }
    }

}

$circle  = new Shape();
echo 'lingkaran ' . $circle->area(10);
echo "\n";
$rect = new Shape();
echo 'kotak '.$rect->area(10,10);

?>
