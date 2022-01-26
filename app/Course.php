<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function stud()
    {
        return $this->hasMany(Student::class,  "course" , "Name") ;
    }
}
