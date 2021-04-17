<?php

namespace App\Domain\User\Services;

use App\Domain\User\Repositories\ListUsersByClientIdRepository;

class ListUsersByClientIdService
{
    private $repository;


    public function __construct(ListUsersByClientIdRepository $repository)
    {
        $this->repository = $repository;
    }

    public function listUsersByClientId(int $client_id)
    {
        $users =  $this->repository->findAllByClientId($client_id);

        return $users;
    }

}