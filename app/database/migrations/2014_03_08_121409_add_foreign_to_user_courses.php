<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToUserCourses extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_courses', function(Blueprint $table)
		{
			
			$table->enum('completed', array(0, 1));
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
			
			$table->dropColumn('completed');
			$table->dropForeign('course_id');
		});
	}

}