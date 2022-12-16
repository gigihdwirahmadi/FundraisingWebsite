<?php

namespace miniframework2\App\Controller;

use miniframework2\App\Core\Router;
use miniframework2\App\Model\ModelTargettrx;
use miniframework2\App\Core\View;

class TargettrxController
{
    public $header;
    public $user;
    public function __construct()
    {
        $this->header = new ModelTargettrx();
    }
    public function index()
    {
     
        View::render('admin/index','admin/styleadmin', $this->header->all());
        
        
    }

    public function submit()
    {
     
        $data = [
            'id_target' => $_POST['id_target'],
            'id_user'=>$_POST['id_user'],
            'donation_total' => $_POST['donation_total'],
            'payment_id'=>$_POST['payment_id'],
            'is_paid' => 0,
            'created_at' => date('Y-m-d H-i-s')
        ];
        try {
      
            $this->header->insert($data);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
       
        View::render('/target/confirmation','program/styledonateprogram',$this->header->findid($_POST['id_user'],$_POST['id_target'],date('Y-m-d')));
    }
    
    public function detailtrxtarget($id)
    {
        View::render('Admin/targettrx/detail','Admin/styledetail',$this->header->find($id));
    }
    public function donatetarget($id)
    {
        View::render('target/donatetarget','program/styledonateprogram', $id);
        // View::render('admin/index', $this->header->all());
    }
    public function finaldonate()
    {
        $ekstensi_diperbolehkan	= array('png','jpg');
        $image = $_FILES['gambar']['name'];
        $x = explode('.', $image);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){
          
            //Mengupload gambar
            move_uploaded_file($file_tmp, '../public/image/trxtarget/'.$image);
     
        try {
            $this->header->setimage($image, $_POST['id']);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    
        Router::redirect("/public/targetindexwebsite");
        }
}
    public function acc()
    {
       
        $id= $_POST['id'];
        $data2=[
            'total'=> $this->header->find($id)->donation_total,
            'id'=>$this->header->find($id)->id_target,
        ];
        try{
        $this->header->acc($id);
        $this->header->setsaldo($data2);
        } catch (\Throwable $th) {
          
            echo $th->getMessage();
        };

        Router::redirect("/public/targettrxindex");
    }
    public function delete()
    {
       
        $id= $_POST['id'];
        $data=$this->header->find($id)->donation_total;
        unlink("../public/image/trxtarget/". $this->header->find($id)->image);
        try{
        $this->header->delete($id);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        };
        // $data2=[
        //     'total'=>$data, //mencari nilai yang didonasikan sebelumnya
        //     'id'=>$this->header->find($id)->id_target, //mencari id target sebelumnya
        // ];
        // $this->header->deletevalue($data2);
        // $id = $_POST['id'];
        
        Router::redirect("/public/targettrxindex");
    }
    public function change()
    {
        $data = [
            'id'=> 2,
            'id_target' => 4,
            'id_user'=>1,
            'donation_total' => 100000,
            'payment_id'=>1,
            'is_paid' => 1,
            'created_at' => "29-10-2022",
        ];
        
        $data2=[
            'total'=>100000, //update yang didonasikan dari tabel trx target
            'id'=>1,//idtarget
        ];
        $data3=[
            'total'=> $this->header->find(4)->donation_total,
            'id'=>$this->header->find(4)->id_target,
        ];
       
        $this->header->deletevalue($data3);
        try {
            $this->header->setsaldo($data2);
            $this->header->update($data);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
      
        // Router::redirect("\public");
    }
}