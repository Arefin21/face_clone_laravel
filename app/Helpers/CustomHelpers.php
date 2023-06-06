<?php
use Illuminate\Support\Facades\Auth;

 function processImage($file){
    $extension=$file->getClientOriginalExtension();
             $fileName='image_'.time().'.'.$extension;  
             $location='/image/user_'. Auth::user()->id.'/';
             $file->move(public_path().$location,$fileName);
             $imageFinal=$location.$fileName;
             return $imageFinal;
            }
   