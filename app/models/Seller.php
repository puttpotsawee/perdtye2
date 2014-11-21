<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Seller extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Seller';
	protected $primaryKey = 'idseller';
	protected $timestamp = false;
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
