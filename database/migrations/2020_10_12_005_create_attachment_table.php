<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migration CreateAttachmentTable : permet de faire la migration de la table Attachments
 *
 * @author : Thomas Payan
 * @version 1.2
 */
class CreateAttachmentTable extends Migration
{
    /**
     * Création de la table 'attachments'
     * Composition de la table : 'id', 'file', 'filename', 'size', 'type', 'user_id', 'task_id', 'created_at', 'updated_at'
	 *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
			$table->string('file');
			$table->string('filename');
			$table->integer('size');
			$table->string('type');
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
     * Suppression de la table 'attachments'
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attachments');
    }
}
