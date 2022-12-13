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
        var_dump($this->header->all());
        // View::render('admin/index', $this->header->all());
        
        
    }
    public function add()
    {
        View::render('Targettrx/add', "");
    }
    public function submit()
    {
        $data = [
            'id_target' => 1,
            'id_user'=>1,
            'donation_total' => 100000,
            'payment_id'=>1,
            'is_paid' => 0,
            'created_at' => "29-10-2022",
        ];
        $data2=[
            'total'=>100000,
            'id'=>1,
        ];
        try {
            $this->header->insert($data);
            $this->header->setsaldo($data2);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
       
        // Router::redirect("\public");
    }
    public function update($id)
    {
        die(var_dump($this->header->find($id)));
        View::render('Target/update', $this->header->find($id));
    }
    public function delete()
    {
        $data=$this->header->find(4)->donation_total;
        $data2=[
            'total'=>$data, //mencari nilai yang didonasikan sebelumnya
            'id'=>$this->header->find(4)->id_target, //mencari id target sebelumnya
        ];
        $this->header->deletevalue($data2);
        // $id = $_POST['id'];
        $this->header->delete(4);
        // Router::redirect("\public");
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
            'total'=> $this->header->find(4)->donation_total,//mencari nilai yang didonasikan sebelumnya
            'id'=>$this->header->find(4)->id_target,//mencari id target sebelumnya
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