<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

/**
 * Product
 *
 * @property integer $idProduct
 * @property integer $idseller
 * @property string $type
 * @property string $product_name
 * @property string $brand
 * @property string $model
 * @property string $property
 * @property string $dimension
 * @property string $condition
 * @property string $defect
 * @property string $missing_part
 * @property string $payment_method
 * @property string $refund_policy
 * @property float $return_charge
 * @property string $packaging_method
 * @property float $packaging_charge
 * @property string $shipping_method
 * @property float $shipping_fee
 * @property string $pic_url
 * @property-read \Product_auction $product_auction
 * @property-read \Product_direct $product_direct
 * @property-read \Seller $seller
 * @property-read \Illuminate\Database\Eloquent\Collection|\Transaction[] $transaction
 * @property-read \Illuminate\Database\Eloquent\Collection|\Question[] $question
 * @property-read \Illuminate\Database\Eloquent\Collection|\Feedback[] $feedback
 * @method static \Illuminate\Database\Query\Builder|\Product whereIdProduct($value)
 * @method static \Illuminate\Database\Query\Builder|\Product whereIdseller($value)
 * @method static \Illuminate\Database\Query\Builder|\Product whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\Product whereProductName($value)
 * @method static \Illuminate\Database\Query\Builder|\Product whereBrand($value)
 * @method static \Illuminate\Database\Query\Builder|\Product whereModel($value)
 * @method static \Illuminate\Database\Query\Builder|\Product whereProperty($value)
 * @method static \Illuminate\Database\Query\Builder|\Product whereDimension($value)
 * @method static \Illuminate\Database\Query\Builder|\Product whereCondition($value)
 * @method static \Illuminate\Database\Query\Builder|\Product whereDefect($value)
 * @method static \Illuminate\Database\Query\Builder|\Product whereMissingPart($value)
 * @method static \Illuminate\Database\Query\Builder|\Product wherePaymentMethod($value)
 * @method static \Illuminate\Database\Query\Builder|\Product whereRefundPolicy($value)
 * @method static \Illuminate\Database\Query\Builder|\Product whereReturnCharge($value)
 * @method static \Illuminate\Database\Query\Builder|\Product wherePackagingMethod($value)
 * @method static \Illuminate\Database\Query\Builder|\Product wherePackagingCharge($value)
 * @method static \Illuminate\Database\Query\Builder|\Product whereShippingMethod($value)
 * @method static \Illuminate\Database\Query\Builder|\Product whereShippingFee($value)
 * @method static \Illuminate\Database\Query\Builder|\Product wherePicUrl($value)
 */
class Product extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Product';
	protected $primaryKey = 'idProduct';
	public $timestamps = false;

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $fillable = array('*');

	// public function relationship(){
	// 	return $this->hasMany('Credit','foreign_key','local_key');
	// }

	public function product_auction(){
		return $this->hasOne('Product_auction','idproduct_auction',$primaryKey);
	}
	public function product_direct(){
		return $this->hasOne('Product_direct','idproduct_direct',$primaryKey);
	}
	public function seller(){
		return $this->belongsTo('Seller','idSeller','idSeller');
	}
	public function transaction(){
		return $this->hasMany('Transaction','idproduct',$primaryKey);
	}
	public function question(){
		return $this->hasMany('Question','idproduct',$primaryKey);
	}
	public function feedback(){
		return $this->hasMany('Feedback','idproduct',$primaryKey);
	}
}
