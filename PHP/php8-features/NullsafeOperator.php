<?php

/**
 * User class
 */
class User
{
    private string $name;

    /**
     *  __Construct method
     * @param string $name
     */
    public function __construct(?string $name)
    {
        $this->name = $name;
    }

    /**
     * Get $name
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}

$user = new User();
echo $user;
