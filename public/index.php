<?php 
use miniframework2\App\Controller\AdminController;
use miniframework2\App\Controller\UserController;
use miniframework2\App\Controller\TargetController;
use miniframework2\App\Controller\TargettrxController;
use miniframework2\App\Controller\ProgramController;
use miniframework2\App\Controller\ProgramtrxController;
use miniframework2\App\Core\Router;
use miniframework2\App\Middleware\Auth;
use miniframework2\App\Middleware\Guest;
require_once __DIR__. '/../vendor/autoload.php';
session_start();
//admin
Router::addRoute('GET','/', AdminController::class, 'index',[] );
Router::addRoute('GET','/updateadmin/:id', AdminController::class, 'update',[] );
Router::addRoute('GET','/changeadmin', AdminController::class, 'change',[] );
Router::addRoute('GET','/deleteadmin', AdminController::class, 'delete',[] );
Router::addRoute('GET','/AdminIndex', AdminController::class, 'index',[] );
Router::addRoute('GET','/submitadmin', AdminController::class, 'submit',[] );
//user
Router::addRoute('GET','/updateuser/:id', UserController::class, 'update',[] );
Router::addRoute('GET','/changeuser', UserController::class, 'change',[] );
Router::addRoute('GET','/deleteuser', UserController::class, 'delete',[] );
Router::addRoute('GET','/UserIndex', UserController::class, 'index',[] );
Router::addRoute('GET','/submituser', UserController::class, 'submit',[] );
//Target
Router::addRoute('GET','/updatetarget/:id', TargetController::class, 'update',[] );
Router::addRoute('GET','/changetarget', TargetController::class, 'change',[] );
Router::addRoute('GET','/deletetarget', TargetController::class, 'delete',[] );
Router::addRoute('GET','/targetindex', TargetController::class, 'index',[] );
Router::addRoute('GET','/submittarget', TargetController::class, 'submit',[] );
//Program
Router::addRoute('GET','/updateprogram/:id', ProgramController::class, 'update',[] );
Router::addRoute('GET','/changeprogram', ProgramController::class, 'change',[] );
Router::addRoute('GET','/deleteprogram', ProgramController::class, 'delete',[] );
Router::addRoute('GET','/programindex', ProgramController::class, 'index',[] );
Router::addRoute('GET','/submitprogram', ProgramController::class, 'submit',[] );
//programtrx
Router::addRoute('GET','/updateprogramtrx/:id', ProgramtrxController::class, 'update',[] );
Router::addRoute('GET','/changeprogramtrx', ProgramtrxController::class, 'change',[] );
Router::addRoute('GET','/deleteprogramtrx', ProgramtrxController::class, 'delete',[] );
Router::addRoute('GET','/programtrxindex', ProgramtrxController::class, 'index',[] );
Router::addRoute('GET','/submitprogramtrx', ProgramtrxController::class, 'submit',[] );
//targettrx
Router::addRoute('GET','/updatetargettrx/:id', TargettrxController::class, 'update',[] );
Router::addRoute('GET','/changetargettrx', TargettrxController::class, 'change',[] );
Router::addRoute('GET','/deletetargettrx', TargettrxController::class, 'delete',[] );
Router::addRoute('GET','/targettrxindex', TargettrxController::class, 'index',[] );
Router::addRoute('GET','/submittargettrx', TargettrxController::class, 'submit',[] );
Router::run();