<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
	
	public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
	
	public function board()
    {
        return $this->belongsTo('App\Models\Board');
    }
	
	public function participants()
	{
		return $this->hasManyThrough('App\Models\User', 'App\Models\BoardUser', 'board_id', 'id', 'board_id', 'user_id');
	}
	
	public function assignedUsers()
	{
		return $this->belongsToMany('App\Models\User')->using('App\Models\TaskUser')->withPivot('id');
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
