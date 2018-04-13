<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class SalesOrderDetails extends Model
{
	protected $table = 'sales_order_details';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'order_no' => 'int',
		'trans_type' => 'int',
		'qty_sent' => 'float',
		'unit_price' => 'float',
		'quantity' => 'float',
		'invoiced' => 'float',
		'discount_percent' => 'float'
	];

	protected $fillable = [
		'order_no',
		'trans_type',
		'stk_code',
		'description',
		'qty_sent',
		'unit_price',
		'quantity',
		'invoiced',
		'discount_percent'
	];

	public function salesOrder() {
		return $this->belongsTo( SalesOrder::class, 'order_no' );
	}

	public function stock() {
		return $this->belongsTo(Stock::class, 'stock_id', 'stock_id');
	}
}