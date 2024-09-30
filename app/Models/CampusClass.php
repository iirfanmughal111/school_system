<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampusClass extends Model
{
    use HasFactory;
    // protected $table = 'campus_classes';
    protected $fillable = [
        'my_class_id',
        'campus_id',
        'is_active',
        'institute_id',
    ];
    public function campus()
    {
        return $this->belongsTo(Campus::class)->withDefault([
            'name' => 'Unknown',
        ]);
    } 

}

