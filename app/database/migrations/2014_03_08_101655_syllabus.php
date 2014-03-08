<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Syllabus extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('syllabus', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->mediumText('title');
			$table->string('video_url');
			$table->longText('article');
			$table->enum('type', array('video', 'article'));
			$table->unsignedInteger('course_id');
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
		Schema::drop('syllabus');
	}

}
