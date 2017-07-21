<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    //
      protected $fillable = [
        'title', 
        'description', 
        'size',
        'extension',
        'file',
    ];

}
