<?php

namespace App\Creational\AbstractFactory;

class TeacherPerson implements PersonInterFace
{

    public $name;
    public $age;
    public $image;
    public $role;
    public $id;

    private static $storage = [];


    public function create($name, $age, $image, $id)
    {
        $this->name = $name;
        $this->age = $age;
        $this->image = $image;
        $this->role = 'teacher';
        $this->id = $id;
        self::$storage[$id] = $this;

        return $this;
    }

    public function show($id)
    {
        if (isset(self::$storage[$id])) {
            return self::$storage[$id];
        }
        return null;
    }

    public function update($id, $name = null, $age = null, $image = null)
    {
        if (isset(self::$storage[$id])) {
            $student = self::$storage[$id];
            if ($name !== null) {
                $student->name = $name;
            }
            if ($age !== null) {
                $student->age = $age;
            }
            if ($image !== null) {
                $student->image = $image;
            }

            self::$storage[$id] = $student;
            return $student;
        }
        return null;
    }

    public function delete($id)
    {
        if (isset(self::$storage[$id])) {
            unset(self::$storage[$id]);
            return true;
        }
        return false;
    }

}
