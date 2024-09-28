<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tongue extends Model
{
    use HasFactory;

    protected $table = 'tongue'; // Specify the table name if it's not the plural form of the model name

    protected $fillable = [
        'name',
        'code',
        'institute_id',
        'is_active',
    ];

    // Optionally, you can define any relationships here
}
