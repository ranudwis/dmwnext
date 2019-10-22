<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public $timestamps = false;

    public static function get($key)
    {
        return Setting::where('name', $key)->first()->value;
    }

    public static function getMultiple(...$keys)
    {
        $values = Setting::whereIn('name', $keys)->pluck('value');

        return array_combine($keys, $values->toArray());
    }
}
