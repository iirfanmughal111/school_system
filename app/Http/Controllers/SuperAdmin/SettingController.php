<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Helpers\Qs;
use App\Http\Controllers\Controller;
use App\Http\Requests\SettingUpdate;
use App\Repositories\MyClassRepo;
use App\Repositories\SettingRepo;
use  App\Models\MediaFile;
class SettingController extends Controller
{
    protected $setting, $my_class;

    public function __construct(SettingRepo $setting, MyClassRepo $my_class)
    {
        $this->setting = $setting;
        $this->my_class = $my_class;
    }

    public function index()
    {
         $s = $this->setting->all();
         $d['class_types'] = $this->my_class->getTypes();
         $d['s'] = $s->flatMap(function($s){
            return [$s->type => $s->description];
        });
        return view('pages.super_admin.settings', $d);
    }

    public function update(SettingUpdate $req)
    {
        $sets = $req->except('_token', '_method', 'logo');
        $sets['lock_exam'] = $sets['lock_exam'] == 1 ? 1 : 0;
        $keys = array_keys($sets);
        $values = array_values($sets);
        for($i=0; $i<count($sets); $i++){
            $this->setting->update($keys[$i], $values[$i]);
        }

        if($req->hasFile('logo')) {
            $logo = $req->file('logo');
            // $f = Qs::getFileMetaData($logo);
            // $f['name'] = 'logo.' . $f['ext'];
            list($filePath,$fileExt)= Qs::uploadFile($req,'logo');
            if ($filePath){
                $files = MediaFile::where('institute_id', auth()->user()->institute_id)->where('image_type','logo')->get();
                foreach($files as $file){
                    Qs::deleteFile($file->path);
                    $file->delete();
                }
                $mediaFile = new MediaFile();
                $mediaFile->image_type = 'logo';
                $mediaFile->path = $filePath;
                $mediaFile->file_ext = $fileExt;
                $mediaFile->user_id = auth()->id();
                $mediaFile->institute_id = auth()->user()->institute_id;
                $mediaFile->save();
                $this->setting->update('logo_id',  $mediaFile->id);
            }
            
        }

        return back()->with('flash_success', __('msg.update_ok'));

    }

    
    
}
