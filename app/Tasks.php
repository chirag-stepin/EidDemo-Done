<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    //
	protected $table="tasks";
	public function projects()
    {
        return $this->belongsTo(Projects::class);
    }
}
