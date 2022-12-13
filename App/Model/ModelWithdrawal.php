<?php

namespace miniframework2\App\Model;
use miniframework2\App\Config\Database;
class ModelUser extends Database
{
    public function all()
    {
        $statement = self::$conn->prepare("select * from withdrawal left join target on target.id= withdrawal.target_id left join program on program.id= withdrawal.program_id");
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }
    public function insert($data){
        {
            var_dump($data);
            $statement = self::$conn->prepare("INSERT INTO user (name,address,phone,email,password,gender,created_at) 
            values(:name, :address,:phone,:email,:password,:gender,:created_at)");
            return $statement->execute($data);
        }

    }
    public function find($id)
    {
        $statement = self::$conn->prepare("select * from user where id=$id");
        $statement->execute();
        return $statement->fetch(\PDO::FETCH_OBJ);
    }
    public function update($data)
    {
        $statement = self::$conn->prepare("UPDATE user set name= :name, address= :address, phone=:phone,email=:email, password=:password, gender=:gender, created_at=:created_at where id=:id");
        return $statement->execute($data);
    }
    public function delete($id){

        $statement = self::$conn->prepare("DELETE from user where id = :id");
        return $statement->execute(['id'=> $id]);
    }
    public function findemail($email){
        $statement = self::$conn->prepare("SELECT * FROM user WHERE email = :email");
        $statement->execute(['email'=>$email]);
        return $statement->fetch(\PDO::FETCH_OBJ);
    }
}


try{
    $db = new Modeluser();
    $db->find(3);


}catch(\Throwable $th){
    echo $th;
}
?>