<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Question extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('question', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->longText('question');
			$table->string('option_one');
			$table->string('option_two');
			$table->string('option_three');
			$table->string('option_four');
			$table->enum('answer', array(1, 2, 3, 4));
			$table->unsignedInteger('quiz_id');
			$table->foreign('quiz_id')->references('id')->on('quiz');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('question');
	}

}
