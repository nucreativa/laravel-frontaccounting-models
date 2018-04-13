<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {
	protected $table = 'item_codes';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'category_id' => 'int',
		'quantity' => 'float',
		'is_foreign' => 'bool',
		'inactive' => 'bool'
	];

	protected $fillable = [
		'item_code',
		'stock_id',
		'description',
		'category_id',
		'quantity',
		'is_foreign',
		'inactive'
	];
}
