<?php
namespace miniframework2\App\Controller;
use  miniframework2\app\core\Router;
use miniframework2\App\Model\ModelAdmin;
use miniframework2\App\Model\ModelTarget;
use miniframework2\App\Core\View;
class HomeController{
    public $header;
    public $user;
    public function __construct(){
        $this->header = new ModelTarget();
    }
    public function index()
    {
        View::render('User/body', $this->header->all());
    }
    public function add()
    {
        View::render('User/add', "");
    }
 
}