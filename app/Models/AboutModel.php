<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutModel extends Model
{
    //
    public $table = 'abouts';

    public $fillable = ['profile','status'];
}
