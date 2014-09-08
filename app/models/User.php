<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'dtb_customer';

	protected $fillable = ['name01', 'name02', 'kana01', 'kana02', 'zip01', 'zip02',
		'pref', 'addr01', 'addr02', 'email', 'tel01', 'tel02', 'tel03'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

}
