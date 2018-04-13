<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model {
	protected $table = 'groups';
	protected $primaryKey = 'order_no';
	public $timestamps = false;

	protected $casts = [
		'inactive' => 'bool'
	];

	protected $fillable = [
		'description',
		'inactive'
	];
}
