<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassOneResult extends Model
{
    use HasFactory;

    public function student()
    {
        return $this->hasOne(Student::class,'id','student_id');
    }
}
