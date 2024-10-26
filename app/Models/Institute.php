<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;  // Import SoftDeletes trait
use App\Models\Setting;
use App\Helpers\Qs;
class Institute extends Model
{
    use HasFactory, SoftDeletes;  // Use the SoftDeletes trait

    protected $fillable = [
        'name',
        'code',
        'lga_id',
        'user_id',
        'created_by',
        'modified_by',
        'is_active',
        'state_id',
    ];
    public function settings()
    {
        return $this->hasMany(Setting::class);
    }
    function images(){
        return $this->hasMany(MediaFile::class, 'institute_id', 'id');
    }
    function user(){
        return $this->hasOne(User::class, 'id', 'user_id')->withDefault([
            'name' => 'Unknown',
            'email' => 'unknown',
            'phone' => 'unknown',
            'address' => 'unknown',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
    
    public function getLogo()
    {
        $thumbnail = $this->images->firstWhere('image_type', 'logo');
     
        if ($thumbnail) {   
                $thumbnailPath = str_replace('uploads/images/', '', $thumbnail->path);
                return route('file.public_show', ['filename' => $thumbnailPath]);
            }
            return Qs::getDefaultIcon(Qs::getSystemName());

        return $thumbnail ? route('file.show', ['filename' => $thumbnail->path]) : null;
        
    }
    // If you want to customize the column name (optional):
    // protected $dates = ['deleted_at'];
}
