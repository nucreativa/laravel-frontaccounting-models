<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class WorkorderCosting extends Model {
	protected $table = 'wo_costing';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'workorder_id' => 'int',
		'cost_type' => 'bool',
		'trans_type' => 'int',
		'trans_no' => 'int',
		'factor' => 'float'
	];

	protected $fillable = [
		'workorder_id',
		'cost_type',
		'trans_type',
		'trans_no',
		'factor'
	];
}
