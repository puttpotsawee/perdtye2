<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

/**
 * Product_auction
 *
 * @property integer $idproduct_auction
 * @property string $start_time
 * @property string $end_time
 * @property float $minimum_bid
 * @property float $bidding_range
 * @property float $current_price
 * @property-read \Product $product
 * @property-read \Illuminate\Database\Eloquent\Collection|\Auction_list[] $auction_list
 * @method static \Illuminate\Database\Query\Builder|\Product_auction whereIdproductAuction($value) 
 * @method static \Illuminate\Database\Query\Builder|\Product_auction whereStartTime($value) 
 * @method static \Illuminate\Database\Query\Builder|\Product_auction whereEndTime($value) 
 * @method static \Illuminate\Database\Query\Builder|\Product_auction whereMinimumBid($value) 
 * @method static \Illuminate\Database\Query\Builder|\Product_auction whereBiddingRange($value) 
 * @method static \Illuminate\Database\Query\Builder|\Product_auction whereCurrentPrice($value) 
 */
class Product_auction extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Product_auction';
	protected $primaryKey = 'idproduct_auction';
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
	public function auction_list(){
		return $this->hasMany('Auction_list','idproduct_auction',$primaryKey);
	}
}
