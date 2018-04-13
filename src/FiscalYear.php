<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class FiscalYear extends Model {
	protected $table = 'fiscal_year';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'closed' => 'bool'
	];

	protected $dates = [
		'begin',
		'end'
	];

	protected $fillable = [
		'begin',
		'end',
		'closed'
	];
}
