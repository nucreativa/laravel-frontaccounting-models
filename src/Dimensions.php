<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class Dimensions extends Model {
	protected $table = 'dimensions';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'type_' => 'bool',
		'closed' => 'bool'
	];

	protected $dates = [
		'date_',
		'due_date'
	];

	protected $fillable = [
		'reference',
		'name',
		'type_',
		'closed',
		'date_',
		'due_date'
	];
}
