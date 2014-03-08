<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function(Blueprint $table)
		{
			
			$table->increments('id');
			$table->timestamps();
			$table->string('course_name');
			$table->dateTime('starts_on');
			$table->dateTime('ends_on');
			$table->double('duration', 15, 8);
			$table->longText('description');
			$table->mediumText('intro_video_url');
			$table->integer('pincode');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('courses');
	}

}
