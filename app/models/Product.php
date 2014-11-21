<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Product extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Product';
	protected $primaryKey = 'idProduct';
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
