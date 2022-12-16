<?php

namespace miniframework2\App\Controller;

use miniframework2\App\Core\Router;
use miniframework2\App\Model\ModelTarget;
use miniframework2\App\Core\View;

class TargetController
{
    public $header;
    public $user;
    public function __construct()
    {
        $this->header = new ModelTarget();
    }
    public function index()
    {
        View::render('admin/target','admin/styleadmin', $this->header->all());
        
        
    }
    public function indexwebsite()
    {
        View::render4('target/index','target/styletarget', $this->header->all());
    }
    public function add()
    {
        View::render('admin/Target/add', 'admin/styleadd', "");
    }
    public function submit()
    {
        $ekstensi_diperbolehkan	= array('png','jpg');
        $image = $_FILES['gambar']['name'];
        $x = explode('.', $image);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    
            //Mengupload gambar
            move_uploaded_file($file_tmp, '../public/image/target/'.$image);
        $data = [
            'name' =>  $_POST['name'],
            'category'=> $_POST['category'],
            'description' => $_POST['description'],
            'address'=> $_POST['address'],
            'phone' =>  $_POST['phone'],
            'required_donate' =>  $_POST['required_donate'],
            'collected_donate' => "0",
            'saldo_donate' => "0",
            'image'=>$image,
            'created_at' => date('Y-m-d H-i-s')
        ];
        try {
            $this->header->insert($data);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
       
        Router::redirect("/public/targetindex");
    } }
    public function update($id)
    {
        View::render('admin/Target/update', 'admin/styleadd',$this->header->find($id));
    }
    public function getupdate($id)
    {
        die(var_dump($this->header->find($id)));
        View::render('target/detail','target/detailstyle', $this->header->find($id));
    }
    public function delete()
    {
        $id = $_POST['id'];
        unlink("../public/image/target/". $this->header->find($id)->image);
        $this->header->delete($id);
        Router::redirect("/public/targetindex");
    }
    public function change()
    {
        $data = [
            'id' =>  $_POST['id'],
            'name' =>  $_POST['name'],
            'category'=> $_POST['category'],
            'description' => $_POST['description'],
            'address'=> $_POST['address'],
            'phone' =>  $_POST['phone'],
            'required_donate' =>  $_POST['required_donate'],
            'collected_donate' => "0",
            'saldo_donate' => "0",
            'created_at' => date('Y-m-d H-i-s')
        ];
        try {
            $this->header->update($data);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
      
        Router::redirect("/public/targetindex");
    }
}