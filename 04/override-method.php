<?php

Class Parentssss{
    public function bar()
    {
        echo "this is parent bar";
    }
}

class childs extends Parentssss{
    public function bar()
    {
        echo "this is child bar";
    }
}

$child = new childs();
$child->bar();