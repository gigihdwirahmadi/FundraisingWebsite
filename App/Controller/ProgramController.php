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
        var_dump($this->header->all());
        // View::render('admin/index', $this->header->all());
        
        
    }
    public function add()
    {
        View::render('Target/add', "");
    }
    public function submit()
    {
        $data = [
            'name' => 'gigih',
            'start_program'=>'29-10-2022',
            'end_program' => "30-11-2022",
            'description_program'=>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non, voluptate.",
            'donate_required' => '12000000',
            'collected_donate' => "100000",
            'created_at' => "29-10-2022",
            'saldo_donate' => "0",
            'image'=>''
        ];
        try {
            $this->header->insert($data);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
       
        // Router::redirect("\public");
    }
    public function update($id)
    {
        die(var_dump($this->header->find($id)));
        View::render('Program/update', $this->header->find($id));
    }
    public function delete()
    {
        // $id = $_POST['id'];
        $this->header->delete(4);
        
        // Router::redirect("\public");
    }
    public function change()
    {
        $data = [
            'id'=> 2,
            'name' => 'Program Peduli Bencana',
            'start_program'=>'29-10-2022',
            'end_program' => "30-11-2022",
            'description_program'=>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non, voluptate.",
            'donate_required' => '12000000',
            'collected_donate' => "100000",
            'created_at' => "29-10-2022",
            'saldo_donate' => "0",
            'image'=>''
        ];
        try {
            $this->header->update($data);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
      
        // Router::redirect("\public");
    }
}