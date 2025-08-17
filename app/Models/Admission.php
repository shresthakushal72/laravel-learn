<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    //
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    
}
