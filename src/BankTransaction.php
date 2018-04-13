<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class BankTransaction extends Model {
	protected $table = 'bank_trans';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'type' => 'int',
		'trans_no' => 'int',
		'amount' => 'float',
		'dimension_id' => 'int',
		'dimension2_id' => 'int',
		'person_type_id' => 'int',
		'person_id' => 'boolean'
	];

	protected $dates = [
		'trans_date',
		'reconciled'
	];

	protected $fillable = [
		'type',
		'trans_no',
		'bank_act',
		'ref',
		'trans_date',
		'amount',
		'dimension_id',
		'dimension2_id',
		'person_type_id',
		'person_id',
		'reconciled'
	];

	public function dimension1() {
		return $this->hasOne( Dimensions::class, 'id', 'dimension_id' );
	}

	public function dimension2() {
		return $this->hasOne( Dimensions::class, 'id', 'dimension2_id' );
	}
}
