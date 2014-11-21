<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Question extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Question';
	protected $primaryKey = 'idQuestion';
	protected $timestamp = false;
	protected $fillable = array('*');


	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function answer(){
		return $this->hasMany('Answer','idquestion','idQuestion');
	}
	public function member(){
		return $this->belongsTo('Member','idmember','idmember');
	}
	public function transaction(){
		return $this->belongsTo('Product','idProduct','idproduct');
	}


}
