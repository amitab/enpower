<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class UserDetails extends ValidationModel {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	 
	protected $table = 'user_details';
	
	public $timestamps = false;

}