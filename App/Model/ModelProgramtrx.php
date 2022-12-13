<?php

namespace miniframework2\App\Model;
use miniframework2\App\Config\Database;
class ModelProgramtrx extends Database
{
    public function all()
    {
        $statement = self::$conn->prepare("select donate_program.*, program.name as programname, payment.id, payment_name, payment.rekening, user.name as donatur, user.address as addresuser, program.name, start_program, end_program from donate_program inner join program on program.id= donate_program.id_program inner join user on user.id= donate_program.id_user inner join payment on payment.id=donate_program.payment_id");
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }
    public function insert($data){
        {
            $statement = self::$conn->prepare("INSERT INTO donate_program (id_program, id_user, donation_total,payment_id,is_paid, created_at) 
            values (:id_program,:id_user,:donation_total,:payment_id,:is_paid,:created_at )"); 
            return $statement->execute($data);
        }
    }
    public function find($id)
    {
        $statement = self::$conn->prepare("select * from donate_program where id=$id");
        $statement->execute();
        return $statement->fetch(\PDO::FETCH_OBJ);
    }
    public function update($data)
    {
        $statement = self::$conn->prepare("UPDATE donate_program set id_program=:id_program, id_user=:id_user, donation_total=:donation_total,payment_id=:payment_id,is_paid=:is_paid, created_at=:created_at where id=:id");
        return $statement->execute($data);
    }
    public function setsaldo($data)
    {
        $statement = self::$conn->prepare("update program set collected_donate= collected_donate+:total, saldo_donate= saldo_donate+:total where id=:id");
        return $statement->execute($data);
    }
    public function deletevalue($data)
    {
        $statement = self::$conn->prepare("update program set collected_donate= collected_donate-:total, saldo_donate= saldo_donate-:total where id=:id");
        return $statement->execute($data);
    }
    public function delete($id){

        $statement = self::$conn->prepare("DELETE from donate_program where id = :id");
        return $statement->execute(['id'=> $id]);
    }
}


?>