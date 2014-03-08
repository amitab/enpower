<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Question extends ValidationModel {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'question';

}