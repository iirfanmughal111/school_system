<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class MediaFile extends Model
{
    use HasFactory;

    protected $table = "media_files";

    protected $fillable = ['institute_id', 'path', 'image_type','file_ext', 'user_id'];

    public function getFullPathAttribute()
    {
        // Assuming 'file_path' stores the relative path (e.g., 'uploads/images/filename.jpg')
        // return Storage::url($this->path);
        return url('storage/app/' . $this->path);
    }
    public function getVisaThumbnail(){
        $thumbnail = $this->firstWhere('image_type', 'thumbnail');
        return url('storage/app/' . $thumbnail->path);
    }
}
