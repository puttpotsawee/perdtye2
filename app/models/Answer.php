<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

/**
 * Answer
 *
 * @property integer $idAnswer
 * @property integer $idmember
 * @property integer $idquestion
 * @property string $timestamp
 * @property string $content
 * @property-read \Member $credit
 * @property-read \Question $question
 * @method static \Illuminate\Database\Query\Builder|\Answer whereIdAnswer($value)
 * @method static \Illuminate\Database\Query\Builder|\Answer whereIdmember($value)
 * @method static \Illuminate\Database\Query\Builder|\Answer whereIdquestion($value)
 * @method static \Illuminate\Database\Query\Builder|\Answer whereTimestamp($value)
 * @method static \Illuminate\Database\Query\Builder|\Answer whereContent($value)
 */
class Answer extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Answer';
	protected $primaryKey = 'idAnswer';
	public $timestamps = false;
	protected $fillable = array('*');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	// protected $hidden = array('password', 'remember_token');


	public function credit(){
		return $this->belongsTo('Member','idmember','idmember');
	}
	public function question(){
		return $this->belongsTo('Question','idQuestion','idquestion');
	}

}
