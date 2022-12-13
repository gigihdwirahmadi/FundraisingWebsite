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
            'category'=>'foundation',
            'description' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, dolores.",
            'address'=>'yogyakarta',
            'phone' => '0897687878787',
            'required_donate' => "10000000",
            'collected_donate' => "0",
            'saldo_donate' => "0",
            'image'=>'',
            'created_at' => "29-11-2022"
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
        View::render('Target/update', $this->header->find($id));
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
            'id' => 3,
            'name' => 'jaduiiiiiiiiii',
            'category'=>'foundation',
            'description' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, dolores.",
            'address'=>'yogyakarta',
            'phone' => '0897687878787',
            'required_donate' => "10000000",
            'collected_donate' => "0",
            'saldo_donate' => "0",
            'image'=>'',
            'created_at' => "29-11-2022"
        ];
        try {
            $this->header->update($data);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
      
        // Router::redirect("\public");
    }
}