<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

/**
 * Question
 *
 * @property integer $idQuestion
 * @property integer $idproduct
 * @property integer $idmember
 * @property string $timestamp
 * @property string $topic
 * @property string $content
 * @property string $type
 * @property-read \Illuminate\Database\Eloquent\Collection|\Answer[] $answer
 * @property-read \Member $member
 * @property-read \Product $transaction
 * @method static \Illuminate\Database\Query\Builder|\Question whereIdQuestion($value)
 * @method static \Illuminate\Database\Query\Builder|\Question whereIdproduct($value)
 * @method static \Illuminate\Database\Query\Builder|\Question whereIdmember($value)
 * @method static \Illuminate\Database\Query\Builder|\Question whereTimestamp($value)
 * @method static \Illuminate\Database\Query\Builder|\Question whereTopic($value)
 * @method static \Illuminate\Database\Query\Builder|\Question whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\Question whereType($value)
 */
class Question extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'question';
	protected $primaryKey = 'idQuestion';
	public $timestamps = false;
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
