<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'short_name',
        'lga_id',
        'user_id',
        'address',
        'contact',
        'is_active',
        'state_id',
        'est_date',
        'institute_id',
    ];
}

