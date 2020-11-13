<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Classe Board : permet de gérer les relations de la table Board
 *
 * @author : Thomas Payan
 * @version 1.2
 */
class Board extends Model
{
    use HasFactory;
	
	/**
	 * Méthode qui permet de récupérer le propriétaire du board associé à la table Board
	 *
	 * @return : Le propriétaire du board
	 */
	public function owner()
	{
		return $this->belongsTo('App\Models\User', 'user_id');
	}
	
	/**
	 * Méthode qui permet de récupérer les users associés à la table Board
	 *
	 * @return : Les users
	 */
	public function users()
    {
        return $this->belongsToMany('App\Models\User')->using('App\Models\BoardUser')->withPivot(['user_id','board_id']);
    }
	
	/**
	 * Méthode qui permet de récupérer les tâches associéee à la table Board
	 *
	 * @return : Les tâches
	 */
	public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }
}
