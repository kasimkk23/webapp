<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    //
    public function upload_photo($photo){

    	$path = Storage::putFileAs('local', $photo, '/'. $this->id.'/'.$photo->hasName());
    	$this->photo = $path;
    	$this->save();
    }
}
