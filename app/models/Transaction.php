<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Transaction extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Transaction';
	protected $primaryKey = 'idTransaction';
	protected $timestamp = false;
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
