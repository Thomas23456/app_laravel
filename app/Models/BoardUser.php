<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * Classe pivot BoardUser : permet de gérer les relations entre la table User et Board
 *
 * @author : Thomas Payan
 * @version 1.2
 */
class BoardUser extends Pivot
{
	use HasFactory;
	
    public $incrementing = true;
	
	/**
	 * Méthode qui permet de récupérer le user associé à la table BoardUser
	 *
	 * @return : Le user 
	 */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
	
	/**
	 * Méthode qui permet de récupérer la board associé à la table BoardUser
	 *
	 * @return : La board 
	 */
	public function board()
    {
        return $this->belongsTo('App\Models\Board');
    }
	
	/**
	 * Méthode qui permet de récupérer les tâches associées à la table BoardUser
	 *
	 * @return : Les tâches 
	 */
	public function tasks()
    {
        return $this->hasManyThrough('App\Models\Task', 'App\Models\Board', 'id', 'board_id', 'board_id');
    }
}
