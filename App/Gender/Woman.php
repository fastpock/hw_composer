<?php

namespace App\Gender;

use App\Human;

class Woman extends Human implements Go
{
    use Parents;
    private $gender;

    public function __construct(string $name, int $age)
    {
        parent::__construct($name, $age);
        $this->gender = 'female';
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
        } else {
            $go = "Go to work!";
        }
        return $go;
    }
}