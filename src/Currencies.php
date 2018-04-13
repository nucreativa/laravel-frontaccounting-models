<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class Currencies extends Model {
	protected $table = 'currencies';
	protected $primaryKey = 'curr_abrev';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'auto_update' => 'bool',
		'inactive' => 'bool'
	];

	protected $fillable = [
		'currency',
		'curr_symbol',
		'country',
		'hundreds_name',
		'auto_update',
		'inactive'
	];
}
