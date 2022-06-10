<?php
    // local
    // global
    // static

    function localVariable()
    {
        $umur = 20;
        echo "local variable umur  = ".$umur;
    }

    echo localVariable();

    $nama = "joko";

    function globalVariable()
    {
        global $nama;
        echo "\nglobal variabel nama  = ".$nama;
    }
    
    echo globalVariable();

    function staticVariable()
    {
        static $var1 = 1;
        $var2 = 1;

        $var1++;
        $var2++;

        echo "\nstatic variable value  = ".$var1;
        echo "\nnon-static variable value  = ".$var2;

    }
    echo staticVariable();

    echo staticVariable();
?>