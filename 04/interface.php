<?php
    interface Crud{
        public function create($data);
        public function read($id);
        public function update($id, $data);
        public function delete($id);
    }

    class CrudBarang implements Crud{
        public function create($data){
            return "create barang";
        }
        public function read($id){
            return "read barang";
        }
        public function update($id, $data){
            return "update barang";
        }
        public function delete($id){
            return "delete barang";
        }
    }

    $crudBrg = new CrudBarang();
    echo $crudBrg->read('dasd');
?>
