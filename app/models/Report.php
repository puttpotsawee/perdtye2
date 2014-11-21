<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Report extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Report';
	protected $primaryKey = 'idReport';
	protected $timestamp = false;
	protected $fillable = array('*');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	public function member(){
		return $this->belongsTo('Member','idmember','idmember');
	}

}
