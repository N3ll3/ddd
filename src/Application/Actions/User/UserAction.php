<?php
declare(strict_types=1);

namespace App\Application\Actions\User;

use Psr\Log\LoggerInterface;
use App\Application\Actions\Action;
use App\Domain\User\User;

abstract class UserAction extends Action
{
  


    protected $User;

    /**
     * @param LoggerInterface $logger
     * 
     */
    public function __construct(LoggerInterface $logger, User $user) {
        parent::__construct($logger);
       $this->User = $user;
       
    }
}
