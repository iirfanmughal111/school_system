<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use App\Models\MediaFile;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    public function show($filename='abc',$file_id=0)
    {
   
        // Check if the user is authenticated
        if (!auth()->guard('web')->check() && !auth()->guard('admin')->check()) {
            abort(403, 'Non Login User Unauthorized access');
        }
       
       $mediaFileQuery =  MediaFile::Query();
        if (auth()->guard('web')->check()) {
            $mediaFileQuery->where('user_id', auth()->user()->id);
        }
        $mediaFile = $mediaFileQuery->findOrFail($file_id);

       $temp_path = 'uploads/images/'.$filename;  
        // $currentGuard = $this->getCurrentGuardName();
        
        // dd($mediaFile);
    
       if (($temp_path != $mediaFile->path || $mediaFile->id != $file_id)) {
           abort(403, 'Unauthorized access');
       }
    
        // Determine the path to the file
        $filePath = storage_path('app/public/uploads/images/' . $filename);
      
        // Check if the file exists
        if (!file_exists($filePath)) {
            abort(404, 'File not found');
        }
        
        // Return the file as a response
        return response()->file($filePath);
    }

    public function public_show($filename='abc')
    {
       
        $mediaFile =  MediaFile::where('path','uploads/images/'.$filename)->where('image_type' ,'!=','User Uploaded')->first();
      
        // dd($mediaFile);
        if ($mediaFile){
            // Determine the path to the file
        $filePath = storage_path('app/public/' . $mediaFile->path);
        // Check if the file exists
        if (!file_exists($filePath)) {
            abort(404, 'File not found');
        }
            
            // Return the file as a response
            return response()->file($filePath);
        }
        abort_if(true, 404, 'File not found');

        
    }
    private function getCurrentGuardName()
    {
       
        // Loop through all the guards defined in config/auth.php
        foreach (config('auth.guards') as $guard => $guardConfig) {
            // dump($guard);
            if (Auth::guard($guard)->check()) {
                return $guard; // Return the authenticated guard name
            }
        }

        return null; // Return null if no guard is authenticated
    }
}


