<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

/**
 * Credit
 *
 * @property integer $idcredit
 * @property integer $idmember
 * @property string $cardnumber
 * @property string $cardname
 * @property string $expiredate
 * @property-read \Member $member
 * @method static \Illuminate\Database\Query\Builder|\Credit whereIdcredit($value)
 * @method static \Illuminate\Database\Query\Builder|\Credit whereIdmember($value)
 * @method static \Illuminate\Database\Query\Builder|\Credit whereCardnumber($value)
 * @method static \Illuminate\Database\Query\Builder|\Credit whereCardname($value)
 * @method static \Illuminate\Database\Query\Builder|\Credit whereExpiredate($value)
 */
class Credit extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Credit';
	protected $primaryKey = 'idcredit';
	public $timestamps = false;

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	// protected $hidden = array('password', 'remember_token');

	protected $fillable = array('*');

	public function member(){
		return $this->belongsTo('Member','idmember','idmember');
	}

}
