<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migration CreateUserTable : permet de faire la migration de la table User
 *
 * @author : Thomas Payan
 * @version 1.2
 */
class CreateUserTable extends Migration
{
    /**
     * Création de la table 'users'
     * Composition de la table : 'id', 'name', 'email', 'email_verified_at', 'password', 'remember_token', 'created_at', 'updated_at'
	 *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
			$table->string('email_verified_at');
			$table->string('password');
			$table->string('remember_token');
            $table->timestamps(); //remplace created_at et update_at
			
			$table->engine='InnoDB';
        });
    }

    /**
     * Suppression de la table 'users'
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
