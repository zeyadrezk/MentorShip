<?php

namespace App\Creational\AbstractFactory;

interface PersonInterFace
{

    public function create($name , $age , $image ,$id);
    public function show($id);
    public function update($id, $name, $age, $image  );
    public function delete($id);

}
