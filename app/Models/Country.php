<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Country
 * @package App\Models
 * @version May 16, 2020, 1:22 am UTC
 *
 * @property string $name
 * @property string $image
 */
class Country extends Model {

	public $table = 'countries';

	public $fillable = [
		'name',
		'image',
	];

	/**
	 * The attributes that should be casted to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'id' => 'integer',
		'name' => 'string',
		'image' => 'string',
	];

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public static $rules = [

	];

}
