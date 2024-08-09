<?php

namespace App\Interfaces;


interface EmployeeInterface
{

    public function create( $request);
    public function show( $id);
    public function update( $id , $request);
    public function delete( $id );

}
