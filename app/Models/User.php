<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
	
	public function attachments()
    {
        return $this->hasMany('App\Models\Attachment');
    }
	
	public function boards()
    {
        return $this->belongsToMany('App\Models\Board')->using('App\Models\BoardUser')->withPivot(['user_id','board_id']);
    }
	
	public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
	
	public function task_user()
    {
        return $this->belongsToMany('App\Models\TaskUser');
    }
	
	public function board_user()
    {
        return $this->belongsToMany('App\Models\BoardUser');
    }
}
