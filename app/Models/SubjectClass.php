<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectClass extends Model
{
    use HasFactory;
    // protected $table = 'subject_classes';
    protected $fillable = [
        'my_class_id',
        'subject_id',
        'is_active',
        'institute_id',
    ];

    public function classes(){
        return $this->hasMany(MyClass::class);
    }
    public function subject(){
        return $this->hasMany(Subject::class);
    }

}

