<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

/**
 * member
 *
 * @property integer $idmember
 * @property string $username
 * @property string $status
 * @property string $email
 * @property string $password
 * @property string $name
 * @property string $surname
 * @property string $phonenumber
 * @property string $remember_token
 * @property-read \Illuminate\Database\Eloquent\Collection|\Credit[] $credit
 * @property-read \Illuminate\Database\Eloquent\Collection|\Address[] $address
 * @property-read \Illuminate\Database\Eloquent\Collection|\Answer[] $answer
 * @property-read \Illuminate\Database\Eloquent\Collection|\Question[] $question
 * @property-read \Illuminate\Database\Eloquent\Collection|\Transaction[] $trnasaction
 * @property-read \Illuminate\Database\Eloquent\Collection|\Feedback[] $feedback_giver
 * @property-read \Illuminate\Database\Eloquent\Collection|\Feedback[] $feedback_receiver
 * @property-read \Illuminate\Database\Eloquent\Collection|\Auction_list[] $auction_list
 * @property-read \Illuminate\Database\Eloquent\Collection|\Report[] $report
 * @property-read \Seller $seller
 * @method static \Illuminate\Database\Query\Builder|\Member whereIdmember($value)
 * @method static \Illuminate\Database\Query\Builder|\Member whereUsername($value)
 * @method static \Illuminate\Database\Query\Builder|\Member whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\Member whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\Member wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\Member whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Member whereSurname($value)
 * @method static \Illuminate\Database\Query\Builder|\Member wherePhonenumber($value)
 * @method static \Illuminate\Database\Query\Builder|\Member whereRememberToken($value)
 */
class Member extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Member';
	public $timestamps = false;
	protected $primaryKey = 'idmember';
	
	// protected $incrementing = false; 

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
