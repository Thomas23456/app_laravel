<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Classe Category : permet de gérer les relations de la table Category
 *
 * @author : Thomas Payan
 * @version 1.2
 */
class Category extends Model
{
    use HasFactory;
	
	/**
	 * Méthode qui permet de récupérer le user associé à la table Category
	 *
	 * @return : Les tâches 
	 */
	public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }
}
