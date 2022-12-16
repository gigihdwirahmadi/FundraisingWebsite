<?php
namespace miniframework2\App\Middleware;
use miniframework2\App\Core\Router;
class Admin{
    function before(): void{
        if ($_SESSION['admin']==null){
            Router::redirect('\public\login');
        }
    }
}