<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class CustomerAllocations extends Model {
	protected $table = 'cust_allocations';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'person_id' => 'int',
		'amt' => 'float',
		'trans_no_from' => 'int',
		'trans_type_from' => 'int',
		'trans_no_to' => 'int',
		'trans_type_to' => 'int'
	];

	protected $dates = [
		'date_alloc'
	];

	protected $fillable = [
		'person_id',
		'amt',
		'date_alloc',
		'trans_no_from',
		'trans_type_from',
		'trans_no_to',
		'trans_type_to'
	];
}
