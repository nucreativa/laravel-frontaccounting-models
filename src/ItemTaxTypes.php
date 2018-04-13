<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class ItemTaxTypes extends Model {
	protected $table = 'item_tax_types';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'exempt' => 'bool',
		'inactive' => 'bool'
	];

	protected $fillable = [
		'name',
		'exempt',
		'inactive'
	];
}
