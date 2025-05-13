<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    //
    protected $fillable = ['full_name', 'membership_status', 'position', 'workplace'];
}
