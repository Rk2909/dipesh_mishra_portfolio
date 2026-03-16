<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoGalleryModel extends Model
{
    //
    public $table = 'videos';

    public $fillable = ['link','status'];
}
