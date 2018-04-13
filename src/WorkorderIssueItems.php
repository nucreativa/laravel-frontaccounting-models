<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class WorkorderIssueItems extends Model {
	protected $table = 'wo_issue_items';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'issue_id' => 'int',
		'qty_issued' => 'float',
		'unit_cost' => 'float'
	];

	protected $fillable = [
		'stock_id',
		'issue_id',
		'qty_issued',
		'unit_cost'
	];

	public function issue() {
		return $this->belongsTo( WorkorderIssues::class, 'issue_id' );
	}
}
