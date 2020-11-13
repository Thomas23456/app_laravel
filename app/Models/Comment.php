<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Classe Comment : permet de gérer les relations de la table Comment
 *
 * @author : Thomas Payan
 * @version 1.2
 */
class Comment extends Model
{
    use HasFactory;
	
	/**
	 * Méthode qui permet de récupérer la tâche associée à la table Comment
	 *
	 * @return : La tâche 
	 */
	public function task()
    {
        return $this->belongsTo('App\Models\Task');
    }
	
	/**
	 * Méthode qui permet de récupérer le user associé à la table Comment
	 *
	 * @return : Le user 
	 */
	public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
