<?php

/**
 *  User class
 *  The operator came in php 8.0 `?->` is Null-safe operator 
 */
class User
{
    private  $user;
    public function __construct($user = null)
    {
        $this->user = $user;
    }
    public function getUser()
    {
        return $this->user;
    }
}
// $user = new User('Sunwarul');
// if($user->getUser() !== null ) {
//     echo $user->getUser();
// }
// Using '?->' Null-safe operator: 

$user = new User();
echo $user?->getUser();
