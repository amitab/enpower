<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Option extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('option', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('option');
			$table->unsignedInteger('question_id');
			$table->foreign('question_id')->references('id')->on('question');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('option');
	}

}
