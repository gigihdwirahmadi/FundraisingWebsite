<?php

namespace miniframework2\App\Model;
use miniframework2\App\Config\Database;
class ModelWithdrawal extends Database
{
    public function all()
    {
        $statement = self::$conn->prepare("select withdrawal.* , admin.name as adminname, target.saldo_donate,admin.email, target.name as targetname from withdrawal inner join admin on admin.id= withdrawal.admin_id inner join target on target.id= withdrawal.target_id union SELECT withdrawal.*,admin.name as adminname, program.saldo_donate, admin.email, program.name as programname from withdrawal inner join admin on admin.id= withdrawal.admin_id inner join program on program.id= withdrawal.program_id");
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }
    public function insert($data){
        {
            var_dump($data);
            $statement = self::$conn->prepare("INSERT INTO withdrawal(target_id,program_id,admin_id,date,total) 
            values(:target_id,:program_id,:admin_id,:date,:total)");
            return $statement->execute($data);
        }
    }
    public function delete($id){
        $statement = self::$conn->prepare("DELETE from withdrawal where id = :id");
        return $statement->execute(['id'=> $id]);
    }
    public function deletevaluetarget($data)
    {
        $statement = self::$conn->prepare("update target set  saldo_donate= saldo_donate-:total where id=:id");
        return $statement->execute($data);
    }
    public function deletevalueprogram($data)
    {
        $statement = self::$conn->prepare("update program set saldo_donate= saldo_donate-:total where id=:id");
        return $statement->execute($data);
    }
}


try{
    $db = new Modeluser();
    $db->find(3);


}catch(\Throwable $th){
    echo $th;
}
?>