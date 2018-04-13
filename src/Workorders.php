<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class Workorders extends Model {
	protected $table = 'workorders';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'units_reqd' => 'float',
		'type' => 'bool',
		'units_issued' => 'float',
		'closed' => 'bool',
		'released' => 'bool',
		'additional_costs' => 'float'
	];

	protected $dates = [
		'date_',
		'required_by',
		'released_date'
	];

	protected $fillable = [
		'wo_ref',
		'loc_code',
		'units_reqd',
		'stock_id',
		'date_',
		'type',
		'required_by',
		'released_date',
		'units_issued',
		'closed',
		'released',
		'additional_costs'
	];

	public function issues() {
		return $this->hasMany( WorkorderIssues::class, 'workorder_id' );
	}

	public function manufactures() {
		return $this->hasMany( WorkorderManufacture::class, 'workorder_id' );
	}

	public function requirements() {
		return $this->hasMany( WorkorderRequirements::class, 'workorder_id' );
	}
}
