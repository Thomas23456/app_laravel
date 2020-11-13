<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskUserTable extends Migration
{
    /**
     * Run the migrations.
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
				  
			$table->unique(['task_id','user_id']);
				  
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
		Schema::dropForeign('task_user_user_id_foreign');
		Schema::dropForeign('task_user_task_id_foreign');
		
        Schema::dropIfExists('task_user');
    }
}
