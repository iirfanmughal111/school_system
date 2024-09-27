<?php

namespace App\Repositories;


use App\Models\Setting;
use App\Helpers\Qs;

class SettingRepo
{
    public function update($type, $desc)
    {
        return Setting::updateOrCreate(['institute_id' => Qs::getInstituteId(), 'type' => $type],['description' => $desc,'institute_id' =>auth()->user()->institute_id]);
        
    }

    public function getSetting($type,$InstituteId=1)
    {
        return Setting::where('institute_id',Qs::getInstituteId())->where('type', $type)->get();
    }

    public function all($InstituteId=null)
    {
        return Setting::where('institute_id',Qs::getInstituteId())->get();;
    }
    public function getMasterSettings()
    {
        return Setting::where('institute_id',1)->get();;
    }
    
}