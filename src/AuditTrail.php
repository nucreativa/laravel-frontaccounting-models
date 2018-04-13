<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class AuditTrail extends Model {
	protected $table = 'audit_trail';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'type' => 'int',
		'trans_no' => 'int',
		'user' => 'int',
		'fiscal_year' => 'int',
		'gl_seq' => 'int'
	];

	protected $dates = [
		'stamp',
		'gl_date'
	];

	protected $fillable = [
		'type',
		'trans_no',
		'user',
		'stamp',
		'description',
		'fiscal_year',
		'gl_date',
		'gl_seq'
	];
}
