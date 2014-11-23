<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

/**
 * Auction_list
 *
 * @property integer $idAuction_list
 * @property integer $idproduct_auction
 * @property integer $idmember
 * @property string $timestamp
 * @property float $bid_price
 * @property-read \Product_auction $product_auction
 * @method static \Illuminate\Database\Query\Builder|\Auction_list whereIdAuctionList($value) 
 * @method static \Illuminate\Database\Query\Builder|\Auction_list whereIdproductAuction($value) 
 * @method static \Illuminate\Database\Query\Builder|\Auction_list whereIdmember($value) 
 * @method static \Illuminate\Database\Query\Builder|\Auction_list whereTimestamp($value) 
 * @method static \Illuminate\Database\Query\Builder|\Auction_list whereBidPrice($value) 
 */
class Auction_list extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Auction_list';
	protected $primaryKey = 'idAuction_list';
	public $timestamps = false;

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $fillable = array('*');

	public function product_auction(){
		return $this->belongsTo('Product_auction','idproduct_auction','idproduct_auction');
	}
}
