<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    //
    protected $fillable = [
        'thumb',
        'full_name',
        'membership_status',
        'email',
        'position',
        'workplace',
        'education',
        'education_file',
    ];
}
