<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class BoM extends Model {
	protected $table = 'bom';
	protected $primaryKey = 'id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'workcentre_added' => 'int',
		'quantity' => 'float'
	];

	protected $fillable = [
		'id',
		'quantity'
	];
}
