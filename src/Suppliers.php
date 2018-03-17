<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model {
	protected $table = 'suppliers';
	protected $primaryKey = 'supplier_id';

	public function details() {
		return $this->hasMany( SupplierTransaction::class, 'supplier_id' );
	}

	public function dimension1() {
		return $this->hasOne( Dimensions::class, 'id', 'dimension_id' );
	}

	public function dimension2() {
		return $this->hasOne( Dimensions::class, 'id', 'dimension2_id' );
	}
}
