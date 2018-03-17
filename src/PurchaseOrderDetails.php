<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrderDetails extends Model {
	protected $table = 'purch_order_details';
	protected $primaryKey = 'po_detail_item';

	public function purchaseOrder() {
		return $this->belongsTo( PurchaseOrder::class, 'order_no' );
	}

	public function item() {
		return $this->belongsTo( Item::class, 'item_code', 'item_code' );
	}
}