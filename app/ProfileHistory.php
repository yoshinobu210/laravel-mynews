<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileHistory extends Model
{
    protected $guarded = ['id'];

    public static $rules = [
        'profiles_id' => 'required',
        'edited_at' => 'required',
    ];
}
