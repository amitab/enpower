<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveOptionsFromQuestion extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('question', function(Blueprint $table)
		{
			$table->dropColumn('option_one');
			$table->dropColumn('option_two');
			$table->dropColumn('option_three');
			$table->dropColumn('option_four');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('question', function(Blueprint $table)
		{
			//
		});
	}

}