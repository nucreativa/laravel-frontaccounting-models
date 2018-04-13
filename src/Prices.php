<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class Prices extends Model {
	protected $table = 'prices';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'sales_type_id' => 'int',
		'price' => 'float'
	];

	protected $fillable = [
		'stock_id',
		'sales_type_id',
		'curr_abrev',
		'price'
	];
}
