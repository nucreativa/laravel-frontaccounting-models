<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class Debitors extends Model {
	protected $table = 'debtor_master';
	protected $primaryKey = 'id';

	public function dimension1() {
		return $this->hasOne( Dimensions::class, 'id', 'dimension_id' );
	}

	public function dimension2() {
		return $this->hasOne( Dimensions::class, 'id', 'dimension2_id' );
	}
}
