<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

/**
 * Seller
 *
 * @property integer $idseller
 * @property string $idcardnumber
 * @property string $idcardcopy
 * @property-read \Member $member
 * @property-read \Illuminate\Database\Eloquent\Collection|\Product[] $product
 * @property-read \Illuminate\Database\Eloquent\Collection|\Transaction[] $transaction
 * @method static \Illuminate\Database\Query\Builder|\Seller whereIdseller($value)
 * @method static \Illuminate\Database\Query\Builder|\Seller whereIdcardnumber($value)
 * @method static \Illuminate\Database\Query\Builder|\Seller whereIdcardcopy($value)
 */
class Seller extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Seller';
	protected $primaryKey = 'idseller';
	public $timestamps = false;
	protected $fillable = array('*');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function member(){
		return $this->belongsTo('Member','idmember','idseller');
	}
	public function product(){
		return $this->hasMany('Product','idseller','idseller');
	}
	public function transaction(){
		return $this->hasMany('Transaction','idseller','idseller');
	}
}
