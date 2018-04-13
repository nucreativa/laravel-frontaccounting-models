<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class WorkorderRequirements extends Model {
	protected $table = 'wo_requirements';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'workorder_id' => 'int',
		'workcentre' => 'int',
		'units_req' => 'float',
		'unit_cost' => 'float',
		'units_issued' => 'float'
	];

	protected $fillable = [
		'workorder_id',
		'stock_id',
		'workcentre',
		'units_req',
		'unit_cost',
		'loc_code',
		'units_issued'
	];

	public function workorder() {
		return $this->belongsTo( Workorders::class, 'workorder_id' );
	}
}
