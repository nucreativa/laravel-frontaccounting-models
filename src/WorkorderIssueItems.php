<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class WorkorderIssueItems extends Model {
	protected $table = 'wo_issue_items';
	protected $primaryKey = 'id';

	public function issue() {
		return $this->belongsTo( WorkorderIssues::class, 'issue_id' );
	}
}
