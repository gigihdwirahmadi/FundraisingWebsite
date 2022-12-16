<?php

namespace miniframework2\App\Controller;

use miniframework2\App\Core\Router;
use miniframework2\App\Model\ModelProgram;
use miniframework2\App\Core\View;

class ProgramController
{
    public $header;
    public $user;
    public function __construct()
    {
        $this->header = new ModelProgram();
    }
    public function index()
    {
        View::render('admin/program','admin/styleadmin', $this->header->all());
        // View::render('admin/index', $this->header->all());
    }
    public function indexwebsite()
    {
        View::render4('program/index','program/styleprogram', $this->header->all());
    }
    public function add()
    {
        View::render('admin/program/add','admin/styleadd', "");
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
            move_uploaded_file($file_tmp, '../public/image/program/'.$image);

            $data = [
                'name' =>  $_POST['name'],
                'start_program'=>$_POST['start_program'],
                'end_program' => $_POST['end_program'],
                'description_program'=>$_POST['description_program'],
                'donate_required' => $_POST['donate_required'],
                'collected_donate' => 0,
                'created_at' => date('Y-m-d H-i-s'),
                'saldo_donate' => 0,
                'image'=>$image,
            ];
            try {
                $this->header->insert($data);
            } catch (\Throwable $th) {
                echo $th->getMessage();
            }
           
        
        
        Router::redirect("\public\programindex");
    }
}
    public function update($id)
    {

        View::render('admin/program/update','admin/styleadd', $this->header->find($id));
    }
    public function delete()
    {
        
       
        $id = $_POST['id'];
        unlink("../public/image/program/". $this->header->find($id)->image);
        $this->header->delete($id);
        
        Router::redirect("\public\programindex");
    }
    public function change()
    {
        $data = [
            'id'=>  $_POST['id'],
            'name' =>  $_POST['name'],
            'start_program'=>$_POST['start_program'],
            'end_program' => $_POST['end_program'],
            'description_program'=>$_POST['description_program'],
            'donate_required' => $_POST['donate_required'],
            'collected_donate' => 0,
            'created_at' => date('Y-m-d H-i-s'),
            'saldo_donate' => 0,
           
        ];
        try {
            $this->header->update($data);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
      
        Router::redirect("\public\programindex");
    }
}