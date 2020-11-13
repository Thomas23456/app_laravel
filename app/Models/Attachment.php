<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Classe Attachment : permet de gérer les relations de la table Attachment
 *
 * @author : Thomas Payan
 * @version 1.2
 */
class Attachment extends Model
{
    use HasFactory;
	
	/**
	 * Méthode qui permet de récupérer la tâche associée à la table Attachment
	 *
	 * @return : La tâche
	 */
	public function task()
    {
        return $this->belongsTo('App\Models\Task');
    }
	
	/**
	 * Méthode qui permet de récupérer le user associé à la table Attachment
	 *
	 * @return void : Le user
	 */
	public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
