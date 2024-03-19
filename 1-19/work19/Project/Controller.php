<?php

namespace Project;

class Controller
{
    public $age;
    public $profession;

    public function GetAge()
    {
        return $this->age;
    }

    public function SetAge($age)
    {
        $this->age = $age;
    }

    public function GetProfession()
    {
        return $this->profession;
    }

    public function SetProfession($profession)
    {
        $this->profession = $profession;
    }
}
