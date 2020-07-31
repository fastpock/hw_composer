<?php

namespace App\Gender;

trait Parents
{
    private $mother;
    private $father;
    public function setMother(Woman $mom)
    {
        $this->mother = $mom;
    }

    public function getMother()
    {
        return $this->mother;
    }

    public function setFather(Man $dad)
    {
        $this->father = $dad;
    }

    public function getFather()
    {
        return $this->father;
    }

    public function __toString()
    {
        $str = "";
        $str .= "Name: $this->name. ";
        $str .= "Age: $this->age. ";
        $str .= "Gender: $this->gender. ";
        if (!is_null($this->father)) {
            $str .= "Father: $this->father";
        }
        if (!is_null($this->mother)) {
            $str .= "Mother: $this->mother";
        }
        return $str;
    }
}