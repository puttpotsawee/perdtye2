<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

/**
 * Transaction
 *
 * @property integer $idTransaction
 * @property integer $idseller
 * @property integer $idmember
 * @property integer $idproduct
 * @property float $price
 * @property integer $quantity
 * @property string $status
 * @property string $timestamp
 * @property-read \Member $member
 * @property-read \Seller $seller
 * @property-read \Product $product
 * @method static \Illuminate\Database\Query\Builder|\Transaction whereIdTransaction($value) 
 * @method static \Illuminate\Database\Query\Builder|\Transaction whereIdseller($value) 
 * @method static \Illuminate\Database\Query\Builder|\Transaction whereIdmember($value) 
 * @method static \Illuminate\Database\Query\Builder|\Transaction whereIdproduct($value) 
 * @method static \Illuminate\Database\Query\Builder|\Transaction wherePrice($value) 
 * @method static \Illuminate\Database\Query\Builder|\Transaction whereQuantity($value) 
 * @method static \Illuminate\Database\Query\Builder|\Transaction whereStatus($value) 
 * @method static \Illuminate\Database\Query\Builder|\Transaction whereTimestamp($value) 
 */
class Transaction extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'transaction';
	protected $primaryKey = 'idTransaction';
	public $timestamps = false;
	protected $fillable = array('*');

	public function member(){
		return $this->belongsTo('Member','idmember','idmember');
	}
	public function seller(){
		return $this->belongsTo('Seller','idseller','idseller');
	}
	public function product(){
		return $this->belongsTo('Product','idProduct','idproduct');
	}


}
