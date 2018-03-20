<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class WorkorderManufacture extends Model {
	protected $table = 'wo_manufacture';
	protected $primaryKey = 'id';

	public function workorder() {
		return $this->belongsTo( Workorders::class, 'workorder_id' );
	}
}
