<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

/**
 * Report
 *
 * @property integer $idReport
 * @property integer $idmember
 * @property string $topic
 * @property string $timestamp
 * @property string $content
 * @property-read \Member $member
 * @method static \Illuminate\Database\Query\Builder|\Report whereIdReport($value)
 * @method static \Illuminate\Database\Query\Builder|\Report whereIdmember($value)
 * @method static \Illuminate\Database\Query\Builder|\Report whereTopic($value)
 * @method static \Illuminate\Database\Query\Builder|\Report whereTimestamp($value)
 * @method static \Illuminate\Database\Query\Builder|\Report whereContent($value)
 */
class Report extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'report';
	protected $primaryKey = 'idReport';
	public $timestamps = false;
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
