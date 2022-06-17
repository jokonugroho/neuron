<?php
trait Crud{
    public function create($data){
        return "create";
    }
}

trait Authentication{
    public function check($id){
        return "check dulu";
    }
}

class Barang {
    use Crud, Authentication;
}


$barang = new Barang();
echo $barang->check('sudah login belum?');
echo $barang->create('barang baru');

?>