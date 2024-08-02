<?php

namespace App\Http\Controllers;

use App\Creational\AbstractFactory\PersonAbstractFactory;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    private $personFactory;
    private $person;

    public function __construct(PersonAbstractFactory $personFactory )
    {
        $this->$personFactory = $personFactory;
    }


    public function index()
    {
        $this->personFactory = new PersonAbstractFactory('student', 20, 'image',  5);
        $this->person = $this->personFactory->student();
        return $this->person;
    }
}
