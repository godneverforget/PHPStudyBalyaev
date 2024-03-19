<?php

namespace Core;

class Controller
{
    public $name;
    public $secondname;
    public $salary;

    public function GetName()
    {
        return $this->name;
    }

    public function SetName($name)
    {
        $this->name = $name;
    }

    public function GetSalary()
    {
        return $this->salary;
    }

    public function SetSalary($salary)
    {
        $this->salary = $salary;
    }

    public function GetSecondName()
    {
        return $this->secondname;
    }

    public function SetSecondName($secondname)
    {
        $this->secondname = $secondname;
    }
}
