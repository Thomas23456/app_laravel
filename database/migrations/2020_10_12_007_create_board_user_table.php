<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migration CreateBoardUserTable : permet de faire la migration de la table BoardUser
 *
 * @author : Thomas Payan
 * @version 1.2
 */
class CreateBoardUserTable extends Migration
{
    /**
     * Création de la table 'board_user'
     * Composition de la table : 'id', 'user_id', 'board_id', 'created_at', 'updated_at'
	 *
     * @return void
     */
    public function up()
    {
        Schema::create('board_user', function (Blueprint $table) {
			$table->id();
            $table->timestamps();
			
			$table->foreignId('user_id')->constrained('users')
				  ->onUpdate('cascade')
			      ->onDelete('cascade');
				  
			$table->foreignId('board_id')->constrained('boards')
				  ->onUpdate('cascade')
			      ->onDelete('cascade');
				  
			$table->unique(['user_id','board_id']); //contrainte d'unicité sur la table
			
			$table->engine='InnoDB';
        });
    }

    /**
     * Suppression de la table 'board_user'
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('board_user');
    }
}
