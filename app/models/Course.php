<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Course extends ValidationModel {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'courses';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function users() {
        return $this->hasMany('User');
    }

}