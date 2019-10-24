<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function coursegroup()
    {
        return $this->belongsTo(Coursegroup::class);
    }
}
