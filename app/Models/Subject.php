<?php

namespace App\Models;

use App\User;
use Eloquent;

class Subject extends Eloquent
{
    protected $fillable = ['name', 'my_class_id', 'teacher_id', 'campus_id','slug','institute_id'];

    public function my_class()
    {
        return $this->belongsTo(MyClass::class)->withDefault([
            'name' => 'Unknown',
        ]);;
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id')->withDefault([
            'name' => 'Unknown',
        ]);
    }
}
