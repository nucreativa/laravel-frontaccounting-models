<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class WorkorderIssues extends Model {
	protected $table = 'wo_issues';
	protected $primaryKey = 'issue_no';

	public function workorder() {
		return $this->belongsTo( Workorders::class, 'workorder_id' );
	}
}
