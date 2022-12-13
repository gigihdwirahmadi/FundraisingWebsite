<?php

namespace miniframework2\App\Model;
use miniframework2\App\Config\Database;
class ModelTargettrx extends Database
{
    public function all()
    {
        $statement = self::$conn->prepare("select donate_target.*, target.name as targetname, payment.id, payment_name, payment.rekening, user.name as donatur, user.address as addresuser, target.name, target.address as targetaddress, target.phone as targetphone from donate_target inner join target on target.id= donate_target.id_target inner join user on user.id= donate_target.id_user inner join payment on payment.id=donate_target.payment_id");
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }
    public function insert($data){
        {
            $statement = self::$conn->prepare("INSERT INTO donate_target (id_target, id_user, donation_total,payment_id,is_paid, created_at) 
            values (:id_target,:id_user,:donation_total,:payment_id,:is_paid,:created_at )"); 
            return $statement->execute($data);
        }
    }
    public function find($id)
    {
        $statement = self::$conn->prepare("select * from donate_target where id=$id");
        $statement->execute();
        return $statement->fetch(\PDO::FETCH_OBJ);
    }
    public function update($data)
    {
        $statement = self::$conn->prepare("UPDATE donate_target set id_target=:id_target, id_user=:id_user, donation_total=:donation_total,payment_id=:payment_id,is_paid=:is_paid, created_at=:created_at where id=:id");
        return $statement->execute($data);
    }
    public function setsaldo($data)
    {
        $statement = self::$conn->prepare("update target set collected_donate= collected_donate+:total, saldo_donate= saldo_donate+:total where id=:id");
        return $statement->execute($data);
    }
    public function deletevalue($data)
    {
        $statement = self::$conn->prepare("update target set collected_donate= collected_donate-:total, saldo_donate= saldo_donate-:total where id=:id");
        return $statement->execute($data);
    }
    public function delete($id){

        $statement = self::$conn->prepare("DELETE from donate_program where id = :id");
        return $statement->execute(['id'=> $id]);
    }
}


?>