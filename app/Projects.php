<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    //
	protected $table="Projects";
	public function companies()
    {
        return $this->belongsTo(Companies::class);
    }
	public function tasks()
    {
        return $this->hasMany(Tasks::class);
    }
}
