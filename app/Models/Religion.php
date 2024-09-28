<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Religion extends Model
{
    use HasFactory;

    protected $table = 'religions'; // Specify the table name if it's not the plural form of the model name

    protected $fillable = [
        'name',
        'code',
        'institute_id',
        'is_active',
    ];

    // Optionally, you can define any relationships here
}
