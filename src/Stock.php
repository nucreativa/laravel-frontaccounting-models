<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model {
	protected $table = 'stock_master';
	protected $primaryKey = 'stock_id';

	public function category() {
		return $this->hasOne( StockCategory::class, 'category_id', 'category_id' );
	}

	public function faClass() {
		return $this->hasOne( StockFA::class, 'fa_class_id', 'fa_class_id' );
	}

	public function dimension1() {
		return $this->hasOne( Dimensions::class, 'id', 'dimension_id' );
	}

	public function dimension2() {
		return $this->hasOne( Dimensions::class, 'id', 'dimension2_id' );
	}
}
