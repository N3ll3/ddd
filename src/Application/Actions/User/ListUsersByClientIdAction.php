<?php
declare(strict_types=1);

namespace App\Application\Actions\User;

use Psr\Http\Message\ResponseInterface as Response;
use App\Domain\User\Services\ListUsersByClientIdService;

class ListUsersByClientIdAction extends UserAction
{

    private $service;


    public function __construct(ListUsersByClientIdService $listUsersByClientId)
    {
       $this->service = $listUsersByClientId; 
    }
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $clientId = (int) $this->resolveArg('client_id');
        $users = $this->service->listUsersByClientId($clientId);

        return $this->respondWithData($users);
    }
}
