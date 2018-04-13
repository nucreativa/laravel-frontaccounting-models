<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class StockMoves extends Model {
	protected $table = 'stock_moves';
	protected $primaryKey = 'trans_id';
	public $timestamps = false;

	protected $casts = [
		'trans_no' => 'int',
		'type' => 'int',
		'price' => 'float',
		'qty' => 'float',
		'standard_cost' => 'float'
	];

	protected $dates = [
		'tran_date'
	];

	protected $fillable = [
		'trans_no',
		'stock_id',
		'type',
		'loc_code',
		'tran_date',
		'price',
		'reference',
		'qty',
		'standard_cost'
	];
}
