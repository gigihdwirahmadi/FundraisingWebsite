<?php

namespace miniframework2\App\Controller;

use miniframework2\App\Core\Router;
use miniframework2\App\Model\ModelAdmin;
use miniframework2\App\Core\View;

class AdminController
{
    public $header;
    public $user;
    public function __construct()
    {
        $this->header = new ModelAdmin();
    }
    public function index()
    {
        var_dump($this->header->all());
        // View::render('admin/index', $this->header->all());
        
        
    }
    public function add()
    {
        View::render('admin/add', "");
    }
    public function submit()
    {
        $data = [
            'name' => 'gigih',
            'gender'=>'male',
            'address' => 'Yogyakarta',
            'born_place'=>'yoga',
            'email' => 'gigih@gmail.com',
            'password' => "1223",
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
        View::render('User/update', $this->header->find($id));
    }
    public function delete()
    {
        // $id = $_POST['id'];
        $this->header->delete(5);
        // Router::redirect("\public");
    }
    public function change()
    {
        $data = [
            'id' => 1,
            'name' => 'gigih',
            'gender'=>'male',
            'address' => 'Yogyakarta',
            'born_place'=>'yoga',
            'email' => 'gigih@gmail.com',
            'password' => "1223",
            'created_at' => "29-11-2022"
        ];
        var_dump($data);
        try {
            $this->header->update($data);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
      
        // Router::redirect("\public");
    }
}