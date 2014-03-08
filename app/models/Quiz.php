<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Quiz extends ValidationModel {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'quiz';

}