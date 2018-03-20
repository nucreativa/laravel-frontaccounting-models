<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class Workorders extends Model {
	protected $table = 'workorders';
	protected $primaryKey = 'id';

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
