<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Classe Task : permet de gérer les relations de la table Task
 *
 * @author : Thomas Payan
 * @version 1.2
 */
class Task extends Model
{
    use HasFactory;
	
	/**
	 * Méthode qui permet de récupérer la catégorie associée à la table Comment
	 *
	 * @return : La catégorie
	 */
	public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
	
	/**
	 * Méthode qui permet de récupérer le board associé à la table Task
	 *
	 * @return : Le board
	 */
	public function board()
    {
        return $this->belongsTo('App\Models\Board');
    }
	
	/**
	 * Méthode qui permet de récupérer les participants associés à la table Task
	 *
	 * @return : Les participants
	 */
	public function participants()
	{
		return $this->hasManyThrough('App\Models\User', 'App\Models\BoardUser', 'board_id', 'id', 'board_id', 'user_id');
	}
	
	/**
	 * Méthode qui permet de récupérer les users assignés associés à la table Task
	 *
	 * @return : Les users assignés
	 */
	public function assignedUsers()
	{
		return $this->belongsToMany('App\Models\User')->using('App\Models\TaskUser')->withPivot('id');
	}
	
	/**
	 * Méthode qui permet de récupérer les commentaires associés à la table Task
	 *
	 * @return : Les commentaires
	 */
	public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
	
	/**
	 * Méthode qui permet de récupérer les pièces jointes associées à la table Task
	 *
	 * @return : Les pièces jointes
	 */
	public function attachments()
    {
        return $this->hasMany('App\Models\Attachment');
    }
}
