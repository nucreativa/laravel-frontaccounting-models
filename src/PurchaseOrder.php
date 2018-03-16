<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
	protected $table = 'purch_orders';
	protected $primaryKey = 'order_no';

	public function details() {
		return $this->hasMany( PurchaseOrderDetails::class, 'order_no' );
	}
}