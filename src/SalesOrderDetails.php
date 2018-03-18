<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class SalesOrderDetails extends Model
{
	protected $table = 'sales_order_details';
	protected $primaryKey = 'id';

	public function salesOrder() {
		return $this->belongsTo( SalesOrder::class, 'order_no' );
	}

	public function stock() {
		return $this->belongsTo(Stock::class, 'stock_id', 'stock_id');
	}
}