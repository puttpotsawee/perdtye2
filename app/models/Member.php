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


	// public function relationship(){
	// 	return $this->hasMany('Credit','foreign_key','local_key');
	// }

	public function credit(){
		return $this->hasMany('Credit','idmember',$primaryKey);
	}
	public function address(){
		return $this->hasMany('Address','idmember',$primaryKey);
	}
	public function answer(){
		return $this->hasMany('Answer','idmember',$primaryKey);
	}
	public function question(){
		return $this->hasMany('Question','idmember',$primaryKey);
	}
	public function trnasaction(){
		return $this->hasMany('Transaction','idmember',$primaryKey);
	}
	public function feedback_giver(){
		return $this->hasMany('Feedback','idgiver',$primaryKey);
	}
	public function feedback_receiver(){
		return $this->hasMany('Feedback','idreceiver',$primaryKey);
	}
	public function auction_list(){
		return $this->hasMany('Auction_list','idmember',$primaryKey);
	public function report(){
		return $this->hasMany('Report','idmember',$primaryKey);
	}
	public function seller(){
		return $this->hasOne('Seller','idseller',$primaryKey)
	}

}
