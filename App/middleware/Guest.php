<?php
namespace miniframework2\App\Middleware;
use miniframework2\App\Core\Router;
class Guest{
    function before(): void{
        if (@$_SESSION['admin']||@$_SESSION['user']){
            Router::redirect('\public');
        }
    }
}