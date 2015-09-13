<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Device extends Model
{

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	protected $guarded  = array('id');

	/**
	 * The rules for email field, automatic validation.
	 *
	 * @var array
	private $rules = array(
			'imei' => 'required|min:2',
			'name' => 'required|min:2'
			);
	 */
}
