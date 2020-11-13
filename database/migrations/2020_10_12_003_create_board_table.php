<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migration CreateBoardTable : permet de faire la migration de la table Board
 *
 * @author : Thomas Payan
 * @version 1.2
 */
class CreateBoardTable extends Migration
{
    /**
     * Création de la table 'boards'
     * Composition de la table : 'id', 'title', 'description', 'user_id', 'created_at', 'updated_at'
	 *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            $table->id();
			$table->string('title');
			$table->string('description');
            $table->timestamps();
			
			$table->foreignId('user_id')->constrained('users')
				  ->onUpdate('cascade')
			      ->onDelete('cascade');
				  
			$table->engine='InnoDB';
        });
    }

    /**
     * Suppression de la table 'boards'
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boards');
    }
}
