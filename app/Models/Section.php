<?php

namespace App\Models;

use App\User;
use Eloquent;

class Section extends Eloquent
{
    protected $fillable = ['name', 'my_class_id', 'campus_id','active', 'teacher_id','institute_id'];

    public function my_class()
    {
        return $this->belongsTo(MyClass::class);
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function student_record()
    {
        return $this->hasMany(StudentRecord::class);
    }
}
