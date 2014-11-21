<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Member extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Member';
	protected $primaryKey = 'idmember';
	protected $timestamp = false;

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	protected $fillable = array();

	public function credit(){
		return $this->hasMany('Credit','idmember','idmember');
	}
	public function address(){
		return $this->hasMany('Address','idmember','idmember');
	}
	public function answer(){
		return $this->hasMany('Answer','idmember','idmember');
	}
	public function question(){
		return $this->hasMany('Question','idmember','idmember');
	}
	public function trnasaction(){
		return $this->hasMany('Transaction','idmember','idmember');
	}
}
