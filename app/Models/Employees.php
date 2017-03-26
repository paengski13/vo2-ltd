<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employees extends Model
{
    use SoftDeletes;

    protected $hidden = ['id'];

    /**
     * Get the department details the employee belongs to
     */
    public function department()
    {
        return $this->belongsTo('App\Models\Departments');
    }
}
