<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model {
	protected $table = 'stock_master';
	protected $primaryKey = 'stock_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'category_id' => 'int',
		'tax_type_id' => 'int',
		'dimension_id' => 'int',
		'dimension2_id' => 'int',
		'purchase_cost' => 'float',
		'material_cost' => 'float',
		'labour_cost' => 'float',
		'overhead_cost' => 'float',
		'inactive' => 'bool',
		'no_sale' => 'bool',
		'no_purchase' => 'bool',
		'editable' => 'bool',
		'depreciation_rate' => 'float',
		'depreciation_factor' => 'float'
	];

	protected $dates = [
		'depreciation_start',
		'depreciation_date'
	];

	protected $fillable = [
		'category_id',
		'tax_type_id',
		'description',
		'long_description',
		'units',
		'mb_flag',
		'sales_account',
		'cogs_account',
		'inventory_account',
		'adjustment_account',
		'wip_account',
		'dimension_id',
		'dimension2_id',
		'purchase_cost',
		'material_cost',
		'labour_cost',
		'overhead_cost',
		'inactive',
		'no_sale',
		'no_purchase',
		'editable',
		'depreciation_method',
		'depreciation_rate',
		'depreciation_factor',
		'depreciation_start',
		'depreciation_date',
		'fa_class_id'
	];

	public function category() {
		return $this->hasOne( StockCategory::class, 'category_id', 'category_id' );
	}

	public function faClass() {
		return $this->hasOne( StockFA::class, 'fa_class_id', 'fa_class_id' );
	}

	public function prices() {
		return $this->hasMany( Prices::class, 'stock_id', 'stock_id' );
	}

	public function dimension1() {
		return $this->hasOne( Dimensions::class, 'id', 'dimension_id' );
	}

	public function dimension2() {
		return $this->hasOne( Dimensions::class, 'id', 'dimension2_id' );
	}
}
