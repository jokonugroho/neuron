<?php
function swapVariable($param1, $param2){
    echo "paramter 1 : $param1, Parameter 2 : $param2";
    echo "\n";

    /// change value by reference
    $swap = $param1; 
    $param1 = $param2;
    $param2 = $swap;

    echo "paramter 1 : $param1, Parameter 2 : $param2";
}

echo swapVariable(10, 20);
?>