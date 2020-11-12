<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoardUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('board_user', function (Blueprint $table) {
			$table->id('id');
            $table->timestamps();
			
			$table->foreignId('user_id')->constrained('users')
				  ->onUpdate('cascade')
			      ->onDelete('cascade');
				  
			$table->foreignId('board_id')->constrained('boards')
				  ->onUpdate('cascade')
			      ->onDelete('cascade');
				  
			$table->unique(['user_id','board_id']);
				  
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
		Schema::dropForeign('board_user_user_id_foreign');
		Schema::dropForeign('board_user_board_id_foreign');
		
        Schema::dropIfExists('board_user');
    }
}
