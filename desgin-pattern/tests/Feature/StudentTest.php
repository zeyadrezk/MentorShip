<?php

namespace Tests\Feature;

use Creational\AbstractFactory\PersonAbstractFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StudentTest extends TestCase
{
    /**
     * A basic feature test example.
     */
//    public function test_example(): void
//    {
//        $response = $this->get('/');
//
//        $response->assertStatus(200);
//    }

    private $personFactory;


    public function testCreateStudent()
    {
        $personFactory = new PersonAbstractFactory('student' , 20 , 'image','student',5 );
        $person = $personFactory->student();
        $this->assertInstanceOf(PersonAbstractFactory::class, $person);
    }

}
