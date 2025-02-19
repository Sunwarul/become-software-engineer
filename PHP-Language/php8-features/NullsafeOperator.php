<?php

class User
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}

$user = new User(null);
// $user = new User('John Doe');
// if ($user->getName() !== null) {
//     echo $user->getName();
// } else {
//     echo "No user provided.\n";
// }
// echo $user?->getName();
echo $user?->getName() ?? 'No User Provided';
