<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

/**
 * Address
 *
 * @property-read \Member $member
 * @property integer $idaddress
 * @property integer $idmember
 * @property string $country
 * @property string $zipcode
 * @property string $province
 * @property string $city
 * @property string $district
 * @property string $road
 * @property string $house_number
 * @method static \Illuminate\Database\Query\Builder|\Address whereIdaddress($value)
 * @method static \Illuminate\Database\Query\Builder|\Address whereIdmember($value)
 * @method static \Illuminate\Database\Query\Builder|\Address whereCountry($value)
 * @method static \Illuminate\Database\Query\Builder|\Address whereZipcode($value)
 * @method static \Illuminate\Database\Query\Builder|\Address whereProvince($value)
 * @method static \Illuminate\Database\Query\Builder|\Address whereCity($value)
 * @method static \Illuminate\Database\Query\Builder|\Address whereDistrict($value)
 * @method static \Illuminate\Database\Query\Builder|\Address whereRoad($value)
 * @method static \Illuminate\Database\Query\Builder|\Address whereHouseNumber($value)
 */
class Address extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'address';
	protected $primaryKey = 'idaddress';
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
