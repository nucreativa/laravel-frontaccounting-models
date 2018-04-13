<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class ChartMaster extends Model {
	protected $table = 'char_master';
	protected $primaryKey = 'account_code';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'inactive' => 'bool'
	];

	protected $fillable = [
		'account_code2',
		'account_name',
		'account_type',
		'inactive'
	];
}
