<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
	
	public function ownedBoards()
	{
		return $this->hasMany('App\Models\Board');
	}
	
	public function boards()
    {
        return $this->belongsToMany('App\Models\Board')->using('App\Models\BoardUser')->withPivot(['user_id','board_id']);
    }
	
	public function assignedTasks()
	{
		return $this->belongsToMany('App\Models\Task')->using('App\Models\TaskUser')->withPivot('id');
	}
	
	public function allTasks()
	{
		return $this->hasManyThrough('App\Models\Task', 'App\Models\TaskUser', 'task_id', 'id', 'task_id', 'user_id');
	}
	
	public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
	
	public function attachments()
    {
        return $this->hasMany('App\Models\Attachment');
    }
}
