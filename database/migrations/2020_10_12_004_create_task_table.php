<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
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
			$table->string('state');
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
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
