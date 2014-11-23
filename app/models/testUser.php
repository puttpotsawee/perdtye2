<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

/**
 * testuser
 *
 * @property string $username
 * @property string $password
 * @property integer $id
 * @method static \Illuminate\Database\Query\Builder|\testUser whereUsername($value)
 * @method static \Illuminate\Database\Query\Builder|\testUser wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\testUser whereId($value)
 */
class testUser extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'testuser';
	protected $primaryKey = 'id';
	public $timestamps = false;
	protected $fillable = array('*');

	

}
