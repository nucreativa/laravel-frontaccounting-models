<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class WorkorderManufacture extends Model {
	protected $table = 'wo_manufacture';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'workorder_id' => 'int',
		'quantity' => 'float'
	];

	protected $dates = [
		'date_'
	];

	protected $fillable = [
		'reference',
		'workorder_id',
		'quantity',
		'date_'
	];

	public function workorder() {
		return $this->belongsTo( Workorders::class, 'workorder_id' );
	}
}
