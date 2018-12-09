<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Post extends Model
{
    // Table Name
    protected $table = 'posts';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function uploadFile($file){

        if(null !== $file){
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore= $filename.'-'.time().'.'.$extension;
            $path = $file->storeAs('public/cover_images', $fileNameToStore);
            $path = 'cover_images/' . $fileNameToStore;
        } else {
            $path = 'cover_images/noimage.png';
        }

        $this->cover_image = $path;
    }
}
