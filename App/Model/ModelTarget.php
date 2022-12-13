<?php

namespace miniframework2\App\Model;
use miniframework2\App\Config\Database;
class ModelTarget extends Database
{
    public function all()
    {
        $statement = self::$conn->prepare("select * from target");
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }
    public function insert($data){
        {
            $statement = self::$conn->prepare("INSERT INTO target (name, category, description,address,phone, required_donate, collected_donate, saldo_donate,image, created_at) 
            values (:name, :category, :description,:address,:phone, :required_donate, :collected_donate, :saldo_donate,:image, :created_at) ");
            return $statement->execute($data);
        }

    }
    public function find($id)
    {
        $statement = self::$conn->prepare("select * from target where id=$id");
        $statement->execute();
        return $statement->fetch(\PDO::FETCH_OBJ);
    }
    public function update($data)
    {
        $statement = self::$conn->prepare("UPDATE target set name=:name, category=:category, description=:description, address=:address,phone=:phone, required_donate=:required_donate, collected_donate=:collected_donate, saldo_donate=:saldo_donate,image=:image, created_at=:created_at where id=:id");
       
        return $statement->execute($data);
        die(var_dump($statement));
    }
    public function delete($id){

        $statement = self::$conn->prepare("DELETE from target where id = :id");
        return $statement->execute(['id'=> $id]);
    }
    public function findemail($email){
        $statement = self::$conn->prepare("SELECT * FROM target WHERE email = :email");
        $statement->execute(['email'=>$email]);
        return $statement->fetch(\PDO::FETCH_OBJ);
    }
}


try{
    $db = new Modeltarget();
    $db->find(3);


}catch(\Throwable $th){
    echo $th;
}
?>