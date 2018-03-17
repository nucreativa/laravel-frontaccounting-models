<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class SalesOrder extends Model {
	protected $table = 'fa_sales_order';
	protected $primaryKey = 'order_no';

	public function details() {
		return $this->hasMany( SalesOrderDetails::class, 'order_no' );
	}
}