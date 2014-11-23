<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

/**
 * Product_direct
 *
 * @property integer $idproduct_direct
 * @property float $price
 * @property integer $quantity
 * @property integer $remaining
 * @property-read \Product $product
 * @method static \Illuminate\Database\Query\Builder|\Product_direct whereIdproductDirect($value) 
 * @method static \Illuminate\Database\Query\Builder|\Product_direct wherePrice($value) 
 * @method static \Illuminate\Database\Query\Builder|\Product_direct whereQuantity($value) 
 * @method static \Illuminate\Database\Query\Builder|\Product_direct whereRemaining($value) 
 */
class Product_direct extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'product_direct';
	protected $primaryKey = 'idproduct_direct';
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

	public function product(){
		return $this->hasOne('Product','idProduct',$primaryKey);
	}
}
