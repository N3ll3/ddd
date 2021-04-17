<?php

namespace App\Domain\User\Repositories;


use PDO;


class ListAllUsersRepository 
 {

    protected $connection;

    public function __construct(PDO $connection)
    {
        $this->connection =  $connection;
    }

   public function findAll(){
    
    $sql = 'select nom, email, adresse, code_postal, ville, id_client from user where 1=1';

    $req =  $this->connection->prepare($sql);
    $req->execute();

    $users = $req->fetchAll();

    return $users;

 }

}