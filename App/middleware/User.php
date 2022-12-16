<?php
namespace miniframework2\App\Middleware;
use miniframework2\App\Core\Router;
class User{
    function before(): void{
        if ($_SESSION['user']==null){
            Router::redirect('\public\login');
        }
    }
}