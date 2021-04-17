<?php

namespace App\Domain\User\Repositories;

use PDO;

class ListUsersByClientIdRepository
{
    protected $connection;
     

    public function __construct(PDO $connection)
    {
        $this->connection =  $connection;
    }

    public function findAllByClientId(int $id_client){
        $sql = 'select nom, email, adresse, code_postal, ville, id_client from user where id_client= :id_client';

        $req =  $this->connection->prepare($sql);
        $req->bindParam(':id_client',$id_client,PDO::PARAM_INT);
        $req->execute();
    
        $users = $req->fetchAll();
    
        return $users;
    

    }
}