<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Product_auction extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Product_auction';
	protected $primaryKey = 'idproduct_auction';
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

	public function product(){
		return $this->hasOne('Product','idProduct',$primaryKey);
	}
	public function auction_list(){
		return $this->hasMany('Auction_list','idproduct_auction',$primaryKey);
	}
}
