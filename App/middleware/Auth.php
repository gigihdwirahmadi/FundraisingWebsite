<?php
namespace miniframework2\App\Middleware;
use miniframework2\App\Core\Router;
class Auth{
    function before(): void{
        if ($_SESSION['auth']==null){
            Router::redirect('\public\login');
        }
    }
}