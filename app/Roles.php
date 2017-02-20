<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cartalyst\Sentinel\Roles\EloquentRole as CartalystRole;

class Roles extends CartalystRole
{
    protected $fillable = [
        'name',
        'slug',
        'permissions',
        'description',
    ];

    // public function scopeOfType($query, $type){
    // 	return $query->where('slug', $type);
    // }
}
