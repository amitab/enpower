<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToUserQuiz extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_quiz', function(Blueprint $table)
        {
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
		Schema::table('user_quiz', function(Blueprint $table)
		{
			$table->dropForeign('quiz_id')->references('id')->on('quiz');
			$table->dropColumn('quiz_id');
		});
	}

}