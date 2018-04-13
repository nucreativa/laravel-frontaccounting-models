<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class GLTranscation extends Model {
	protected $table = 'gl_trans';
	protected $primaryKey = 'counter';
	public $timestamps = false;

	protected $casts = [
		'type' => 'int',
		'type_no' => 'int',
		'amount' => 'float',
		'dimension_id' => 'int',
		'dimension2_id' => 'int',
		'person_type_id' => 'int',
		'person_id' => 'boolean'
	];

	protected $dates = [
		'tran_date'
	];

	protected $fillable = [
		'type',
		'type_no',
		'tran_date',
		'account',
		'memo_',
		'amount',
		'dimension_id',
		'dimension2_id',
		'person_type_id',
		'person_id'
	];

	public function dimension1() {
		return $this->hasOne( Dimensions::class, 'id', 'dimension_id' );
	}

	public function dimension2() {
		return $this->hasOne( Dimensions::class, 'id', 'dimension2_id' );
	}
}
