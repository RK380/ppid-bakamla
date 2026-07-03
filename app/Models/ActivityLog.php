<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $fillable = [
        'activity',
        'icon',
        'color',
        'user_id'
    ];
}
