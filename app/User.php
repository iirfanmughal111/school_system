<?php

namespace App;

use App\Models\BloodGroup;
use App\Models\Lga;
use App\Models\Nationality;
use App\Models\StaffRecord;
use App\Models\Institute;
use App\Models\State;
use App\Models\StudentRecord;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Helpers\Qs;
use App\Models\MediaFile;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'phone', 'phone2', 'dob', 'gender', 'photo', 'address', 'bg_id', 'password', 'nal_id', 'state_id', 'lga_id', 'code', 'user_type', 'email_verified_at','institute_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function student_record()
    {
        return $this->hasOne(StudentRecord::class);
    }

    public function lga()
    {
        return $this->belongsTo(Lga::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function nationality()
    {
        return $this->belongsTo(Nationality::class, 'nal_id');
    }

    public function blood_group()
    {
        return $this->belongsTo(BloodGroup::class, 'bg_id');
    }

    public function staff()
    {
        return $this->hasMany(StaffRecord::class);
    }
    public function institute()
    {
        return $this->hasOne(Institute::class)->withDefault([
            'name' => 'Unknown',
        ]);
    }

    function images(){
        return $this->hasMany(MediaFile::class, 'user_id', 'id');
    }
    
    public function getAvatar()
    {
        // dd( $this->images);
        $thumbnail = $this->images->firstWhere('image_type', 'photo');
        // dd( $thumbnail);
        if ($thumbnail) {
                $thumbnailPath = str_replace('uploads/images/', '', $thumbnail->path);
                return route('file.public_show', ['filename' => $thumbnailPath]);
            }
            return 'https://ui-avatars.com/api/?background='.$this->random_dark_color().'&color='.$this->random_light_color().'&size=128&bold=true&name='.$this->name.'&rounded=true';

        
    }
    function random_dark_color() {
        $dt = '';
        for($o=1;$o<=3;$o++)
        {
            $dt .= str_pad( dechex( mt_rand( 0, 127 ) ), 2, '0', STR_PAD_LEFT);
        }
        return $dt;
    }
    function random_light_color() {
        return sprintf('%06X', mt_rand(0, 0xFFFFFF));
    }
 
     

}
