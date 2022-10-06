<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Models\City;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function back(){
    	return redirect()->back();
    }

    protected function uploadFile($file, $isBase64 = false){
        if($isBase64){
            // GET FILE, EXTENSION AND TYPE 
            $ext = explode(';', (explode('/', $file))[1])[0];
            $file = explode(',', $file);
            $b64File['type'] = $file[0];
            $b64File['file'] = $file[1];
            
            // CREATE A UNIQUE FILE NAME 
            $fileName = rand(11111, 55555).time().'.'.$ext;
            
            // UPLOAD IT TO AN PUBLIC FOLDER
            $upload = \File::put(public_path('uploads')."/".$fileName, base64_decode($b64File['file']));
            return $fileName;
        }
        else{
            // UPLOAD FILE
            $fileName = rand(11111, 55555).time().'.'.$file->extension();  
            $uploaded = $file->move(public_path('uploads'), $fileName);

            if($uploaded)
                return $fileName;
            return false;
        }
    }

    protected function getcitiesfromstate($id){
        $cities= City::where('state_id', $id)->where('status', true)->orderBy('name')->get();
        if(!$cities->isEmpty())
            return response()->json(['status'=>true, 'data'=>$cities], 200);
        else
            return response()->json(['status' => false]);
    }	
}
