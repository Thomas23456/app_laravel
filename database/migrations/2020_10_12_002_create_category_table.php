<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migration CreateCategoryTable : permet de faire la migration de la table Category
 *
 * @author : Thomas Payan
 * @version 1.2
 */
class CreateCategoryTable extends Migration
{
    /**
     * Création de la table 'categories'
     * Composition de la table : 'id', 'name', 'created_at', 'updated_at'
	 *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
			$table->string('name');
            $table->timestamps(); //remplace created_at et update_at
			
			$table->engine='InnoDB';
        });
    }

    /**
     * Suppression de la table 'categories'
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
