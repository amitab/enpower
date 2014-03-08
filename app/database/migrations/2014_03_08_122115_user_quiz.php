<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserQuiz extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_quiz', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('email');
			$table->foreign('email')->references('email')->on('users');
			$table->integer('score');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_quiz');
	}

}
