<?php

namespace miniframework2\App\Controller;
use miniframework2\App\Model\ModelWithdrawal;
use miniframework2\App\Core\View;
use miniframework2\App\Core\Router;
use miniframework2\App\Model\ModelTarget;
use miniframework2\App\Model\ModelProgram;

class WithdrawalController
{
    public $header;
    public $user;
    public function __construct()
    {
        $this->header = new ModelWithdrawal();
        $this->target = new ModelTarget();
        $this->program = new ModelProgram();
    }
    public function index()
    {
        View::render('Admin/withdrawal/index','Admin/withdrawal/stylewithdrawal', $this->header->all());
    }
    public function add()
    {
        View::render3('admin/withdrawal/add', "admin/withdrawal/styleadd", $this->target->all(),$this->program->all());
    }
    public function submit()
    {
        if($_POST['target']=="target"){
        $data = [
            'admin_id' => $_POST['admin_id'],
            'target_id' => $_POST['item'],
            'program_id' => null,
            'total' => $_POST['total'],
            'date' => date('Y-m-d H-i-s')
        ];
        $data3=[
            'total'=> $_POST['total'],
            'id'=>$_POST['item'],
        ];
      
         
        try {
            $this->header->deletevaluetarget($data3);
            $this->header->insert($data);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
    else if($_POST['target']=="program"){
        $data = [
            'admin_id' => $_POST['admin_id'],
            'program_id' => $_POST['item'],
            'target_id' => null,
            'total' => $_POST['total'],
            'date' => date('Y-m-d H-i-s')
        ];
        $data3=[
            'total'=> $_POST['total'],
            'id'=>$_POST['item'],
        ];
       
          try {
        $this->header->insert($data);
        $this->header->deletevalueprogram($data3);
    } catch (\Throwable $th) {
        echo $th->getMessage();
    }
    }
  
        Router::redirect("\public\withdrawalindex");
    }
    public function delete()
    {
        $id = $_POST['id'];
        $this->header->delete($id);
        Router::redirect("\public\withdrawalindex");
    }
}