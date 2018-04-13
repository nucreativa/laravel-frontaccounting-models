<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrderDetails extends Model {
	protected $table = 'purch_order_details';
	protected $primaryKey = 'po_detail_item';
	public $timestamps = false;

	protected $casts = [
		'order_no' => 'int',
		'qty_invoiced' => 'float',
		'unit_price' => 'float',
		'act_price' => 'float',
		'std_cost_unit' => 'float',
		'quantity_ordered' => 'float',
		'quantity_received' => 'float'
	];

	protected $dates = [
		'delivery_date'
	];

	protected $fillable = [
		'order_no',
		'item_code',
		'description',
		'delivery_date',
		'qty_invoiced',
		'unit_price',
		'act_price',
		'std_cost_unit',
		'quantity_ordered',
		'quantity_received'
	];

	public function purchaseOrder() {
		return $this->belongsTo( PurchaseOrder::class, 'order_no' );
	}

	public function item() {
		return $this->hasMany( Item::class, 'item_code', 'item_code' );
	}
}