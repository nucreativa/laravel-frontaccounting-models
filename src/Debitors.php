<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class Debitors extends Model {
	protected $table = 'debtor_master';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'sales_type' => 'int',
		'dimension_id' => 'int',
		'dimension2_id' => 'int',
		'credit_status' => 'int',
		'payment_terms' => 'int',
		'discount' => 'float',
		'pymt_discount' => 'float',
		'credit_limit' => 'float',
		'inactive' => 'bool'
	];

	protected $fillable = [
		'name',
		'debtor_ref',
		'address',
		'tax_id',
		'curr_code',
		'sales_type',
		'dimension_id',
		'dimension2_id',
		'credit_status',
		'payment_terms',
		'discount',
		'pymt_discount',
		'credit_limit',
		'notes',
		'inactive'
	];

	public function dimension1() {
		return $this->hasOne( Dimensions::class, 'id', 'dimension_id' );
	}

	public function dimension2() {
		return $this->hasOne( Dimensions::class, 'id', 'dimension2_id' );
	}
}
