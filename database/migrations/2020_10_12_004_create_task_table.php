<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migration CreateTaskTable : permet de faire la migration de la table Task
 *
 * @author : Thomas Payan
 * @version 1.2
 */
class CreateTaskTable extends Migration
{
    /**
     * Création de la table 'tasks'
     * Composition de la table : 'id', 'title', 'description', 'due_date', 'state', 'board_id', 'category_id', 'created_at', 'updated_at'
	 *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
			$table->string('title');
			$table->string('description');
			$table->date('due_date');
			$table->enum('state',['todo','ongoing','done'])->default('todo');
            $table->timestamps(); //remplace created_at et update_at
			
			$table->foreignId('board_id')->constrained('boards')
				  ->onUpdate('cascade')
			      ->onDelete('cascade');
				  
			$table->foreignId('category_id')->constrained('categories')
				  ->onUpdate('cascade')
			      ->onDelete('cascade');
				  
			$table->engine='InnoDB';
        });
    }

    /**
     * Suppression de la table 'tasks'
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
