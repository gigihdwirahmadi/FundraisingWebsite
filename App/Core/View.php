<?php
namespace miniframework2\App\Core;

class View{
    public static function render($view,$data){
        require_once __DIR__. '/../view/template/header.php';
        require_once __DIR__. '/../view/'.$view.'.php';
    }
}