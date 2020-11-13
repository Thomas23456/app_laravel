<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * Classe pivot TaskUser : permet de gérer les relations entre la table Task et User
 *
 * @author : Thomas Payan
 * @version 1.2
 */
class TaskUser extends Pivot
{
	use HasFactory;
	
    public $incrementing = true;
	
	/**
	 * Méthode qui permet de récupérer le user associé à la table TaskUser
	 *
	 * @return : Le user
	 */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
	
	/**
	 * Méthode qui permet de récupérer la tâche associée à la table TaskUser
	 *
	 * @return : La tâche
	 */
	public function task()
    {
        return $this->belongsTo('App\Models\Task');
    }
}
