<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class SalesOrder extends Model {
	protected $table = 'sales_orders';
	protected $primaryKey = 'order_no';

	public function details() {
		return $this->hasMany( SalesOrderDetails::class, 'order_no' );
	}

	public function debitor() {
		return $this->hasOne(Debitors::class, 'debtor_no', 'debtor_no');
	}
}