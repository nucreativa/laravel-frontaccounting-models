<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class StockFA extends Model {
	protected $table = 'stock_fa_class';
	protected $primaryKey = 'fa_class_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'depreciation_rate' => 'float',
		'inactive' => 'bool'
	];

	protected $fillable = [
		'parent_id',
		'description',
		'long_description',
		'depreciation_rate',
		'inactive'
	];
}
