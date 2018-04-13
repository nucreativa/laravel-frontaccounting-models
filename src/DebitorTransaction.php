<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class DebitorTransaction extends Model {
	protected $table = 'debtor_trans';
	protected $primaryKey = 'trans_no';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'trans_no' => 'int',
		'type' => 'int',
		'version' => 'bool',
		'debtor_no' => 'int',
		'branch_code' => 'int',
		'tpe' => 'int',
		'order_' => 'int',
		'ov_amount' => 'float',
		'ov_gst' => 'float',
		'ov_freight' => 'float',
		'ov_freight_tax' => 'float',
		'ov_discount' => 'float',
		'alloc' => 'float',
		'prep_amount' => 'float',
		'rate' => 'float',
		'ship_via' => 'int',
		'dimension_id' => 'int',
		'dimension2_id' => 'int',
		'payment_terms' => 'int',
		'tax_included' => 'bool'
	];

	protected $dates = [
		'tran_date',
		'due_date'
	];

	protected $fillable = [
		'version',
		'branch_code',
		'tran_date',
		'due_date',
		'reference',
		'tpe',
		'order_',
		'ov_amount',
		'ov_gst',
		'ov_freight',
		'ov_freight_tax',
		'ov_discount',
		'alloc',
		'prep_amount',
		'rate',
		'ship_via',
		'dimension_id',
		'dimension2_id',
		'payment_terms',
		'tax_included'
	];

	public function details() {
		return $this->hasMany( DebitorTransactionDetails::class, 'debtor_trans_no' );
	}

	public function dimension1() {
		return $this->hasOne( Dimensions::class, 'id', 'dimension_id' );
	}

	public function dimension2() {
		return $this->hasOne( Dimensions::class, 'id', 'dimension2_id' );
	}
}
