<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class BoardUser extends Pivot
{
	use HasFactory;
	
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
	
	public function board()
    {
        return $this->belongsTo('App\Models\Board');
    }
	
	public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }
}
