<?php

namespace Creational\Tests;

use Creational\AbstractFactory\PersonAbstractFactory;
use PHPUnit\Framework\TestCase;

class TestStudentCRUD extends TestCase
{
    private $personFactory;


    public function testCreateStudent()
    {
        $personFactory = new PersonAbstractFactory('student' , 20 , 'image','student',5 );
        $person = $personFactory->student();
        $this->assertInstanceOf(PersonAbstractFactory::class, $person);
    }
}