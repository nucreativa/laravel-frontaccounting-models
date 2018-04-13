<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class SalesOrder extends Model {
	protected $table = 'sales_orders';
	protected $primaryKey = 'order_no';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'order_no' => 'int',
		'trans_type' => 'int',
		'version' => 'bool',
		'type' => 'bool',
		'debtor_no' => 'int',
		'branch_code' => 'int',
		'order_type' => 'int',
		'ship_via' => 'int',
		'freight_cost' => 'float',
		'payment_terms' => 'int',
		'total' => 'float',
		'prep_amount' => 'float',
		'alloc' => 'float'
	];

	protected $dates = [
		'ord_date',
		'delivery_date'
	];

	protected $fillable = [
		'version',
		'type',
		'debtor_no',
		'branch_code',
		'reference',
		'customer_ref',
		'comments',
		'ord_date',
		'order_type',
		'ship_via',
		'delivery_address',
		'contact_phone',
		'contact_email',
		'deliver_to',
		'freight_cost',
		'from_stk_loc',
		'delivery_date',
		'payment_terms',
		'total',
		'prep_amount',
		'alloc'
	];

	public function details() {
		return $this->hasMany( SalesOrderDetails::class, 'order_no' );
	}

	public function debitor() {
		return $this->hasOne(Debitors::class, 'debtor_no', 'debtor_no');
	}
}