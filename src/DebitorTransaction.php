<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class DebitorTransaction extends Model {
	protected $table = 'fa_debtor_trans';
	protected $primaryKey = 'trans_no';

	public function details() {
		return $this->hasMany( DebitorTransactionDetails::class, 'debtor_trans_no' );
	}
}
