<?php
namespace miniframework2\App\Middleware;
use miniframework2\App\Core\Router;
class Guest{
    function before(): void{
        if (@$_SESSION['auth']){
            Router::redirect('\public');
        }
    }
}