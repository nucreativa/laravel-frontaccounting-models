<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class ChartClass extends Model {
	protected $table = 'chart_class';
	protected $primaryKey = 'cid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ctype' => 'bool',
		'inactive' => 'bool'
	];

	protected $fillable = [
		'class_name',
		'ctype',
		'inactive'
	];
}
