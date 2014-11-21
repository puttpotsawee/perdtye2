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
	
	protected $fillable = array('*');


	// public function relationship(){
	// 	return $this->hasMany('Credit','foreign_key','local_key');
	// }


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
	public function feedback_giver(){
		return $this->hasMany('Feedback','idgiver','idmember');
	}
	public function feedback_receiver(){
		return $this->hasMany('Feedback','idreceiver','idmember');
	}
	public function auction_list(){
		return $this->hasMany('Auction_list','idmember','idmember');
	}
	public function report(){
		return $this->hasMany('Report','idmember','idmember');
	}
	public function seller(){
		return $this->hasOne('Seller','idseller','idmember');
	}

}
