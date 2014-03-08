<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToUserCourses extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_courses', function(Blueprint $table)
		{
            $table->foreign('email')->references('email')->on('users');
            $table->foreign('course_id')->references('id')->on('courses');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_courses', function(Blueprint $table)
		{
			$table->dropForeign('email');
			$table->dropForeign('course_id');
		});
	}

}