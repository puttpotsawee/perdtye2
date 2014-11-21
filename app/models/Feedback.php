<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Feedback extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Feedback';
	protected $primaryKey = 'idFeedback';
	protected $timestamp = false;
	protected $fillable = array('*');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	public function feedback_giver(){
		return $this->belongsTo('Member','idmember','idreceiver');
	}
	public function feedback_receiver(){
		return $this->belongsTo('Member','idmember','idreceiver');
	}
	public function product(){
		return $this->belongsTo('Product','idProduct','idproduct');
	}


}
