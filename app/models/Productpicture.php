<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;


/**
 * Productpicture
 *
 * @property integer $idPicture
 * @property integer $idProduct
 * @property string $picture_url
 * @property-read \Member $product
 * @method static \Illuminate\Database\Query\Builder|\Productpicture whereIdPicture($value) 
 * @method static \Illuminate\Database\Query\Builder|\Productpicture whereIdProduct($value) 
 * @method static \Illuminate\Database\Query\Builder|\Productpicture wherePictureUrl($value) 
 */
class Productpicture extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'productpicture';
	protected $primaryKey = 'idPicture';
	public $timestamps = false;

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	// protected $hidden = array('password', 'remember_token');

	protected $fillable = array('*');

	public function product(){
		return $this->belongsTo('Member','idProduct','idProduct');
	}
}
