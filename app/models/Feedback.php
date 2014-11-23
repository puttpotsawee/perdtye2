<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

/**
 * Feedback
 *
 * @property integer $idFeedback
 * @property integer $idgiver
 * @property integer $idreceiver
 * @property integer $idproduct
 * @property integer $score
 * @property string $content
 * @property string $timestamp
 * @property-read \Member $feedback_giver
 * @property-read \Member $feedback_receiver
 * @property-read \Product $product
 * @method static \Illuminate\Database\Query\Builder|\Feedback whereIdFeedback($value) 
 * @method static \Illuminate\Database\Query\Builder|\Feedback whereIdgiver($value) 
 * @method static \Illuminate\Database\Query\Builder|\Feedback whereIdreceiver($value) 
 * @method static \Illuminate\Database\Query\Builder|\Feedback whereIdproduct($value) 
 * @method static \Illuminate\Database\Query\Builder|\Feedback whereScore($value) 
 * @method static \Illuminate\Database\Query\Builder|\Feedback whereContent($value) 
 * @method static \Illuminate\Database\Query\Builder|\Feedback whereTimestamp($value) 
 */
class Feedback extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Feedback';
	protected $primaryKey = 'idFeedback';
	public $timestamps = false;
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
