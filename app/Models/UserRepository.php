<?php
namespace App\Models;

use  App\Models\User;

class UserRepository extends repository
{
    protected $user;

    public function __construct(User $user)
    {
        parent::__construct($user);
    }

    
}
?>