<?php 
use miniframework2\App\Controller\AdminController;
use miniframework2\App\Controller\UserController;
use miniframework2\App\Controller\TargetController;
use miniframework2\App\Controller\WithdrawalController;
use miniframework2\App\Controller\TargettrxController;
use miniframework2\App\Controller\ProgramController;
use miniframework2\App\Controller\HomeController;
use miniframework2\App\Controller\ProgramtrxController;
use miniframework2\App\Core\Router;
use miniframework2\App\Middleware\Admin;
use miniframework2\App\Middleware\User;
use miniframework2\App\Middleware\Guest;
require_once __DIR__. '/../vendor/autoload.php';
session_start();
//home
Router::addRoute('GET','/logout', HomeController::class, 'logout',[] );
Router::addRoute('GET','/recap', HomeController::class, 'recap',[Admin::class]);
Router::addRoute('GET','/', HomeController::class, 'index',[]);
Router::addRoute('POST','/postlogin', HomeController::class, 'postlogin',[] );
Router::addRoute('GET','/login', HomeController::class, 'login',[] );
Router::addRoute('GET','/registeruser', HomeController::class, 'register',[] );
Router::addRoute('GET','/registeradmin', HomeController::class, 'registeradmin',[] );
//admin
Router::addRoute('GET','/updateadmin/:id', AdminController::class, 'update',[] );
Router::addRoute('GET','/changeadmin', AdminController::class, 'change',[] );
Router::addRoute('GET','/deleteadmin', AdminController::class, 'delete',[] );
Router::addRoute('GET','/adminIndex', AdminController::class, 'index',[] );
Router::addRoute('POST','/postregisteradmin', AdminController::class, 'submit',[] );
//user
Router::addRoute('GET','/updateuser/:id', UserController::class, 'update',[] );
Router::addRoute('GET','/changeuser', UserController::class, 'change',[] );
Router::addRoute('GET','/deleteuser', UserController::class, 'delete',[] );
Router::addRoute('GET','/UserIndex', UserController::class, 'index',[] );
Router::addRoute('POST','/postregisteruser', UserController::class, 'submit',[] );
//Target
Router::addRoute('GET','/gettarget/:id', TargetController::class, 'getupdate',[] );
Router::addRoute('GET','/addtarget', TargetController::class, 'add',[Admin::class]);
Router::addRoute('GET','/updatetarget/:id', TargetController::class, 'update',[Admin::class] );
Router::addRoute('GET','/targetindexwebsite', TargetController::class, 'indexwebsite',[] );
Router::addRoute('POST','/changetarget', TargetController::class, 'change',[Admin::class] );
Router::addRoute('POST','/deletetarget', TargetController::class, 'delete',[Admin::class] );
Router::addRoute('GET','/targetindex', TargetController::class, 'index',[Admin::class] );
Router::addRoute('POST','/submittarget', TargetController::class, 'submit',[Admin::class] );

//Program
Router::addRoute('GET','/addprogram', ProgramController::class, 'add',[Admin::class] );
Router::addRoute('GET','/updateprogram/:id', ProgramController::class, 'update',[Admin::class]);

Router::addRoute('POST','/changeprogram', ProgramController::class, 'change',[Admin::class] );
Router::addRoute('GET','/programindexwebsite', ProgramController::class, 'indexwebsite',[] );
Router::addRoute('POST','/deleteprogram', ProgramController::class, 'delete',[Admin::class] );
Router::addRoute('GET','/programindex', ProgramController::class, 'index',[Admin::class] );
Router::addRoute('POST','/submitprogram', ProgramController::class, 'submit',[Admin::class] );

//programtrx
Router::addRoute('GET','/updateprogramtrx/:id', ProgramtrxController::class, 'update',[] );
Router::addRoute('GET','/changeprogramtrx', ProgramtrxController::class, 'change',[] );
Router::addRoute('POST','/deleteprogramtrx', ProgramtrxController::class, 'delete',[] );
Router::addRoute('GET','/programtrxindex', ProgramtrxController::class, 'index',[Admin::class] );
Router::addRoute('GET','/donateprogram/:id', ProgramtrxController::class, 'donateprogram',[User::class] );
Router::addRoute('GET','/detailtrxprogram/:id', ProgramtrxController::class, 'detailtrxtarget',[] );
Router::addRoute('GET','/donateprogram', ProgramtrxController::class, 'donate',[] );
Router::addRoute('POST','/confrimprogram', ProgramtrxController::class, 'finaldonate',[] );
Router::addRoute('POST','/submitprogramtrx', ProgramtrxController::class, 'submit',[User::class] );
Router::addRoute('POST','/accprogram', ProgramtrxController::class, 'acc',[Admin::class] );
//targettrx
Router::addRoute('GET','/updatetargettrx/:id', TargettrxController::class, 'update',[] );
Router::addRoute('POST','/confrimtarget', TargettrxController::class, 'finaldonate',[] );
Router::addRoute('GET','/donatetarget/:id', TargettrxController::class, 'donatetarget',[User::class]);
Router::addRoute('GET','/detailtrxtarget/:id', TargettrxController::class, 'detailtrxtarget',[Admin::class] );
Router::addRoute('GET','/changetargettrx', TargettrxController::class, 'change',[] );
Router::addRoute('POST','/deletetargettrx', TargettrxController::class, 'delete',[Admin::class] );
Router::addRoute('GET','/targettrxindex', TargettrxController::class, 'index',[] );
Router::addRoute('POST','/submittargettrx', TargettrxController::class, 'submit',[User::class] );
Router::addRoute('POST','/acctarget', TargettrxController::class, 'acc',[Admin::class] );
//withdrawal
Router::addRoute('GET','/addwithdrawal', WithdrawalController::class, 'add',[] );
Router::addRoute('POST','/deletewithdrawal', WithdrawalController::class, 'delete',[] );
Router::addRoute('GET','/withdrawalindex', WithdrawalController::class, 'index',[Admin::class] );
Router::addRoute('POST','/submitwithdrawal', WithdrawalController::class, 'submit',[] );
Router::run();