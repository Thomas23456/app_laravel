<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
	protected $table = 'categories';
	protected $primaryKey = 'id';
	
	public function categories()
    {
        return $this->hasOne('App\Models\Categories');
    }
}
