<?php

class Person
{
    /** 
     * Age of the person
     * @var integer
     */
    private int $age;

    /**
     * Name of the person
     * @var string $name
     */
    private string $name;

    /**
     * Person constructor
     *
     * @param integer $age
     * @param string $name
     */
    public function __construct(int $age, string $name)
    {
        $this->age = $age;
        $this->name = $name;
    }

    /**
     * Get $name
     *
     * @return  string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set $name
     *
     * @param  string  $name  $name
     *
     * @return  self
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get age of the person
     *
     * @return  integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set age of the person
     *
     * @param  integer  $age  Age of the person
     *
     * @return  self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }
}
