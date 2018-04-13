<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class BudgetTransaction extends Model {
	protected $table = 'budget_trans';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'amount' => 'float',
		'dimension_id' => 'int',
		'dimension2_id' => 'int'
	];

	protected $dates = [
		'tran_date'
	];

	protected $fillable = [
		'tran_date',
		'account',
		'memo_',
		'amount',
		'dimension_id',
		'dimension2_id'
	];

	public function dimension1() {
		return $this->hasOne( Dimensions::class, 'id', 'dimension_id' );
	}

	public function dimension2() {
		return $this->hasOne( Dimensions::class, 'id', 'dimension2_id' );
	}
}
