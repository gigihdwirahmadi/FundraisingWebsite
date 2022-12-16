<?php
namespace miniframework2\App\Core;

class View{
    public static function render($view,$style,$data){
        require_once __DIR__. '/../view/template/header.php';
        require_once __DIR__. '/../view/template/navbar.php';
        require_once __DIR__. '/../view/'.$style.'.php';
        require_once __DIR__. '/../view/'.$view.'.php';
        require_once __DIR__. '/../view/template/footer.php';
    }
    public static function render3($view,$style,$data1,$data2){
        require_once __DIR__. '/../view/template/header.php';
        require_once __DIR__. '/../view/template/navbar.php';
        require_once __DIR__. '/../view/'.$style.'.php';
        require_once __DIR__. '/../view/'.$view.'.php';
        require_once __DIR__. '/../view/template/footer.php';
    }
    public static function render2($view,$style,$data){
        require_once __DIR__. '/../view/template/header.php';
        require_once __DIR__. '/../view/'.$style.'.php';
        require_once __DIR__. '/../view/'.$view.'.php';
        require_once __DIR__. '/../view/template/footer.php';
    }
    public static function renderadmin($view,$style,$data){
        require_once __DIR__. '/../view/template/header.php';
        require_once __DIR__. '/../view/'.$style.'.php';
        require_once __DIR__. '/../view/admin/nav.php';
        require_once __DIR__. '/../view/template/navbar.php';
        require_once __DIR__. '/../view/'.$view.'.php';
        require_once __DIR__. '/../view/template/footer.php';
    }
    public static function render4($view,$style,$data){
        require_once __DIR__. '/../view/template/header.php';
        require_once __DIR__. '/../view/template/navbar.php';
        require_once __DIR__. '/../view/'.$style.'.php';
        require_once __DIR__. '/../view/'.$view.'.php';
        require_once __DIR__. '/../view/template/footer2.php';
    }
}