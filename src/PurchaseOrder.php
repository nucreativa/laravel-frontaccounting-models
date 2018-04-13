<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model {
	protected $table = 'purch_orders';
	protected $primaryKey = 'order_no';
	public $timestamps = false;

	protected $casts = [
		'supplier_id' => 'int',
		'total' => 'float',
		'prep_amount' => 'float',
		'alloc' => 'float',
		'tax_included' => 'bool'
	];

	protected $dates = [
		'ord_date'
	];

	protected $fillable = [
		'supplier_id',
		'comments',
		'ord_date',
		'reference',
		'requisition_no',
		'into_stock_location',
		'delivery_address',
		'total',
		'prep_amount',
		'alloc',
		'tax_included'
	];

	public function details() {
		return $this->hasMany( PurchaseOrderDetails::class, 'order_no' );
	}
}