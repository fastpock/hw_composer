<?php

namespace App\Gender;

use App\Human;

class Man extends Human implements Go
{
    use Parents;
    private $gender;
    public function __construct(string $name, int $age)
    {
        parent::__construct($name, $age);
        $this->gender = 'male';
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function say(string $str)
    {
        return static::ucFirst("$this->gender $this->name say: $str");
    }

    public function goto()
    {
        $go = "";
        if ($this->age < 7) {
            $go = "Go to kindergarten";
        } else if ($this->age >= 7 && $this->age < 18) {
            $go = "Go to school";
        } else if ($this->age == 18) {
            $go = "Go to army";
        } else {
            $go = "Go to work!";
        }
        return $go;
    }
}