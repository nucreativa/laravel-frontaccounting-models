<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class ItemUnits extends Model {
	protected $table = 'item_units';
	protected $primaryKey = 'id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'decimals' => 'bool',
		'inactive' => 'bool'
	];

	protected $fillable = [
		'name',
		'decimals',
		'inactive'
	];
}
