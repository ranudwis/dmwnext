<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['name', 'value'];

    public $timestamps = false;

    public static function get($key)
    {
        return Setting::where('name', $key)->first()->value;
    }
}
