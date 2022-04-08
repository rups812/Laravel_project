<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //

    protected $uploads = '/images/';

    protected $fillable = ['file'];
    
    //accessor to echo out images
    public function getFileAttribute($photo){
            return $this->uploads . $photo;
    }

}
