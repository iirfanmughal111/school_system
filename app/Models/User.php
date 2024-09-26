<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; // Use this if you want authentication features

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users'; // Specify the table name if not following Laravel's conventions

    // Fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'email',
        'code',
        'username',
        'user_type',
        'dob',
        'gender',
        'photo',
        'phone',
        'phone2',
        'bg_id',
        'state_id',
        'lga_id',
        'nal_id',
        'address',
        'institute_id',
        'is_active',
        'parent_id',
        'password',
    ];

    // Optionally, you can add hidden attributes
    protected $hidden = [
        'password',
        'remember_token',
        'email_verified_at',
    ];

    // Optionally, you can define relationships
    public function institute()
    {
        return $this->belongsTo(Institute::class, 'institute_id');
    }

    // Add other relationships as needed...
}
