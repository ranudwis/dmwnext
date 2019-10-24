<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['coursegroup_id', 'code', 'name', 'slug', 'credit', 'description'];

    public function coursegroup()
    {
        return $this->belongsTo(Coursegroup::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
