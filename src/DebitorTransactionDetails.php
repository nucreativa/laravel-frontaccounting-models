<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class DebitorTransactionDetails extends Model {
	protected $table = 'fa_debtor_trans_details';
	protected $primaryKey = 'id';

	public function debitorTransaction() {
		return $this->belongsTo( DebitorTransaction::class, 'trans_no', 'debtor_trans_no' );
	}

	public function item() {
		return $this->belongsTo( Item::class, 'stock_id', 'stock_id' );
	}
}
