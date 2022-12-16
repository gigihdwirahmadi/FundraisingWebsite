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
    public function submit()
    {
        $data = [
            'name' => $_POST['name'],
            'address' => $_POST['address'],
            'phone' => $_POST['phone'],
            'email' => $_POST['email'],
            'password'=>password_hash($_POST['password'],PASSWORD_DEFAULT),
            'gender' => $_POST['gender'],
            'created_at' => date('Y-m-d H-i-s')
           
        ];
        try {
            $this->header->insert($data);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
       
        // Router::redirect("\public");
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