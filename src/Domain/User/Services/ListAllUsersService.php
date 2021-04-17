<?php

namespace App\Domain\User\Services;

use App\Domain\User\Repositories\ListAllUsersRepository;



class ListAllUsersService 
{
    private $repository;


    public function __construct(ListAllUsersRepository $repository)
    {
        $this->repository = $repository;
    }

    public function listAllUsers(){
        $users = $this->repository->findAll();


        //validation
        if(count($users) === 0){
            return 'Il n\'a encore aucun utilisateur';
        }

            return $users;
        }
}