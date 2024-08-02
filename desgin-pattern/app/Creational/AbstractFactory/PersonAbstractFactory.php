<?php

namespace App\Creational\AbstractFactory;

class PersonAbstractFactory
{
    private $name;
    private $age;
    private $image;
    private $id;
    private $model;

    public function __construct($name , $age , $image  , $id)
    {
        $this->name = $name;
        $this->age = $age;
        $this->image = $image;
        $this->id = $id;
    }

    public function student()
    {
        return  new StudentPerson();

    }


}
