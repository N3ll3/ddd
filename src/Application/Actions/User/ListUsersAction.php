<?php
declare(strict_types=1);

namespace App\Application\Actions\User;

use App\Domain\User\Services\ListAllUsersService;
use Psr\Http\Message\ResponseInterface as Response;


class ListUsersAction extends UserAction
{


    private $service;


    public function __construct(ListAllUsersService $listAllUsersService)
    {
        $this->service = $listAllUsersService;
    }

    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
    
        $users = $this->service->listAllUsers();

        // $this->logger->info("Users list was viewed.");

        return $this->respondWithData($users);
    }



}
