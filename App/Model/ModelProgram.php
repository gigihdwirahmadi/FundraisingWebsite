<?php

namespace miniframework2\App\Model;
use miniframework2\App\Config\Database;
class ModelProgram extends Database
{
    public function all()
    {
        $statement = self::$conn->prepare("select * from program");
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }
    public function insert($data){
        {
            $statement = self::$conn->prepare("INSERT INTO program (name, start_program, end_program,description_program,donate_required,collected_donate, created_at, saldo_donate, image) 
            values (:name,:start_program,:end_program,:description_program,:donate_required,:collected_donate,:created_at,:saldo_donate,:image )");
            return $statement->execute($data);
        }

    }
    public function find($id)
    {
        $statement = self::$conn->prepare("select * from program where id=$id");
        $statement->execute();
        return $statement->fetch(\PDO::FETCH_OBJ);
    }
    public function update($data)
    {
        $statement = self::$conn->prepare("UPDATE program set name=:name, start_program=:start_program, end_program=:end_program,description_program=:description_program,donate_required=:donate_required,collected_donate=:collected_donate, created_at=:created_at, saldo_donate=:saldo_donate where id=:id");
        return $statement->execute($data);
    }
    public function delete($id){

        $statement = self::$conn->prepare("DELETE from program where id = :id");
        return $statement->execute(['id'=> $id]);
    }
  
}


?>