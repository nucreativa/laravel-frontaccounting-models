<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class WorkorderRequirements extends Model {
	protected $table = 'wo_requirements';
	protected $primaryKey = 'id';

	public function workorder() {
		return $this->belongsTo( Workorders::class, 'workorder_id' );
	}
}
