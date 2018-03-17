<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class DebitorTransaction extends Model {
	protected $table = 'debtor_trans';
	protected $primaryKey = 'trans_no';

	public function details() {
		return $this->hasMany( DebitorTransactionDetails::class, 'debtor_trans_no' );
	}

	public function dimension1() {
		return $this->hasOne( Dimensions::class, 'id', 'dimension_id' );
	}

	public function dimension2() {
		return $this->hasOne( Dimensions::class, 'id', 'dimension2_id' );
	}
}
