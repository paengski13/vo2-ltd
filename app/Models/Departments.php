<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Departments extends Model
{
    use SoftDeletes;

    protected $hidden = ['id'];

    /**
     * Get the list employees belongs to the department
     */
    public function employees()
    {
        return $this->hasMany('App\Comment');
    }
}
