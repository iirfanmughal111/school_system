<?php

namespace App\Repositories;


use App\Models\Setting;

class SettingRepo
{
    public function update($type, $desc)
    {
        return Setting::updateOrCreate(['institute_id' => auth()->user()->institute_id, 'type' => $type],['description' => $desc,'institute_id' =>auth()->user()->institute_id]);
        
    }

    public function getSetting($type)
    {
        return Setting::where('type', $type)->get();
    }

    public function all()
    {
        return Setting::all();
    }
    
}