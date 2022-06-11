<?php

    $fruits = ['mangga', 'melon', 'apel', 'anggur'];
    $serialize = serialize($fruits);
    $unserialize = unserialize($serialize);

    echo $serialize;

    print_r($unserialize);
?>