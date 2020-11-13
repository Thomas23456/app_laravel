<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migration CreateCommentTable : permet de faire la migration de la table Comments
 *
 * @author : Thomas Payan
 * @version 1.2
 */
class CreateCommentTable extends Migration
{
    /**
     * Création de la table 'comments'
     * Composition de la table : 'id', 'text', 'user_id', 'task_id', 'created_at', 'updated_at'
	 *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
			$table->string('text');
            $table->timestamps(); //remplace created_at et update_at
			
			$table->foreignId('user_id')->constrained('users')
				  ->onUpdate('cascade')
			      ->onDelete('cascade');
				  
			$table->foreignId('task_id')->constrained('tasks')
				  ->onUpdate('cascade')
			      ->onDelete('cascade');
				  
			$table->engine='InnoDB';
        });
    }

    /**
     * Suppression de la table 'comments'
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
