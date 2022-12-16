<?php

namespace miniframework2\App\Model;
use miniframework2\App\Config\Database;
class ModelAdmin extends Database
{
    public function all()
    {
        $statement = self::$conn->prepare("select * from admin");
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }
    public function insert($data){
        {
            $statement = self::$conn->prepare("INSERT INTO admin (name,address,email,born_place,password,username,gender,created_at) 
            values(:name,:address,:email,:born_place,:password,:username,:gender,:created_at)");
            return $statement->execute($data);
        }

    }
    public function find($id)
    {
        $statement = self::$conn->prepare("select * from admin where id=$id");
        $statement->execute();
        return $statement->fetch(\PDO::FETCH_OBJ);
    }
    public function update($data)
    {
        $statement = self::$conn->prepare("UPDATE admin set name= :name, gender= :gender, address=:address,born_place=:born_place, password=:password, username=:username, email=:email, created_at=:created_at where id=:id");
        return $statement->execute($data);
    }
    public function delete($id){

        $statement = self::$conn->prepare("DELETE from admin where id = :id");
        return $statement->execute(['id'=> $id]);
    }
    public function findemail($email){
        $statement = self::$conn->prepare("SELECT * FROM admin WHERE email = :email");
        $statement->execute(['email'=>$email]);
        return $statement->fetch(\PDO::FETCH_OBJ);
    }
}


try{
    $db = new ModelAdmin();
    $db->find(3);


}catch(\Throwable $th){
    echo $th;
}
?>