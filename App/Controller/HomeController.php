<?php

namespace miniframework2\App\Controller;

use miniframework2\app\core\Router;
use miniframework2\App\Model\ModelProgram;
use miniframework2\App\Model\ModelAdmin;
use miniframework2\App\Model\ModelUser;
use miniframework2\App\Model\ModelTarget;

use miniframework2\App\Core\View;

class HomeController
{
    public $header;
    public $userr;
    public $adminn;
    public function __construct()
    {
        $this->userr = new ModelUser();
        $this->adminn = new ModelAdmin();
        $this->header = new ModelTarget();
        $this->header2 = new ModelProgram();
    }
    public function index()
    {
   
        View::render4('Home/index', 'Home/styleindex', '');
    }
    public function login()
    {
        View::render2('Login/login', 'Login/stylelogin', '');
    }
    public function recap(){
        View::render3('Recap/recap', 'Recap/stylerecap', $this->header->all(),$this->header2->all());
    }
    public function register()
    {
        View::render2('Login/register', 'Login/stylelogin', '');
    }
    public function registeradmin()
    {
        View::render2('Login/registeradmin', 'Login/stylelogin', '');
    }
    public function postlogin()
    {
        $user = $this->userr->findemail($_POST['email']);
        $admin = $this->adminn->findemail($_POST['email']);
        // if($user && password_verify($_POST['password'], $user->password)){
        if ($user && password_verify($_POST['password'], $user->password)) {
            $_SESSION['user'] = $user;
            Router::redirect('\public');
            return;
        } else if ($admin && password_verify($_POST['password'], $admin->password)) {
            $_SESSION['admin'] = $admin;
            Router::redirect('\public');
            return;
        }
        Router::redirect('\public\login');
    }
    public function logout()
    {
        session_destroy();
        Router::redirect('\public');
    }
}