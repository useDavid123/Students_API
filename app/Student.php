<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;

class Student extends Model
{
    //
    protected $table = "students";

    protected $fillable = [
        "name",
        "course",
        "email",
        "phone"
    ];

    Public function cou()
    {
        return $this->belongsTo(Course::class , "course" , "name" );
    }
}

