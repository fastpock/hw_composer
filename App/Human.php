<?php

namespace App;

abstract class Human
{
    protected $name;
    protected $age;

    /**
     * Human constructor.
     * @param string $name
     * @param int $age
     */
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    abstract public function say(string $str);

    public function getName()
    {
        return $this->name;
    }

    public function setAge(int $newAge)
    {
        if ($newAge > $this->age) {
            $this->age = $newAge;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    public static function ucFirst(string $str)
    {
        return ucfirst($str);
    }

}