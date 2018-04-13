<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class Areas extends Model {
	protected $table = 'areas';
	protected $primaryKey = 'area_code';
	public $timestamps = false;

	protected $casts = [
		'inactive' => 'bool'
	];

	protected $fillable = [
		'description',
		'inactive'
	];
}
