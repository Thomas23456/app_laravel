<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migration CreateTaskUserTable : permet de faire la migration de la table TaskUser
 *
 * @author : Thomas Payan
 * @version 1.2
 */
class CreateTaskUserTable extends Migration
{
    /**
     * Création de la table 'task_user'
     * Composition de la table : 'id', 'task_id', 'user_id', 'created_at', 'updated_at'
	 *
     * @return void
     */
    public function up()
    {
        Schema::create('task_user', function (Blueprint $table) {
			$table->id();
            $table->timestamps();
			
			$table->foreignId('task_id')->constrained('tasks')
				  ->onUpdate('cascade')
			      ->onDelete('cascade');
				  
			$table->foreignId('user_id')->constrained('users')
				  ->onUpdate('cascade')
			      ->onDelete('cascade');
				  
			$table->unique(['task_id','user_id']); //contrainte d'unicité sur la table
			
			$table->engine='InnoDB';
        });
    }

    /**
     * Suppression de la table 'task_user'
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_user');
    }
}
