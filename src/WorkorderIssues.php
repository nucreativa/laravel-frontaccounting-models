<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class WorkorderIssues extends Model {
	protected $table = 'wo_issues';
	protected $primaryKey = 'issue_no';
	public $timestamps = false;

	protected $casts = [
		'workorder_id' => 'int',
		'workcentre_id' => 'int'
	];

	protected $dates = [
		'issue_date'
	];

	protected $fillable = [
		'workorder_id',
		'reference',
		'issue_date',
		'loc_code',
		'workcentre_id'
	];

	public function workorder() {
		return $this->belongsTo( Workorders::class, 'workorder_id' );
	}
}
