<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveQuesSpecificFromQuiz extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('quiz', function(Blueprint $table)
		{
			$table->dropColumn('question');
			$table->dropColumn('option_one');
			$table->dropColumn('option_two');
			$table->dropColumn('option_three');
			$table->dropColumn('option_four');
			$table->dropColumn('answer');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('quiz', function(Blueprint $table)
		{
			//
		});
	}

}