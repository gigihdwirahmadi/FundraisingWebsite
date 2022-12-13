<?php

namespace miniframework2\App\Controller;

use miniframework2\App\Core\Router;
use miniframework2\App\Model\ModelUser;
use miniframework2\App\Core\View;

class UserController
{
    public $header;
    public $user;
    public function __construct()
    {
        $this->header = new ModelUser();
    }
    public function index()
    {
        var_dump($this->header->all());
        // View::render('user/index', $this->header->all());
        
        
    }
    public function add()
    {
        View::render('user/add', "");
    }
    public function submit()
    {
        $data = [
            'name' => 'gigih',
            'address' => 'Yogyakarta',
            'phone' => '089748748758',
            'email' => 'gigih@gmail.com',
            'password' => '1235',
            'gender' => 'male',
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
            'id' => 3,
            'name' => 'gagah',
            'address' => 'Yogyakarta',
            'phone' => '089748748758',
            'email' => 'gigih@gmail.com',
            'password' => '1235',
            'gender' => 'male',
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