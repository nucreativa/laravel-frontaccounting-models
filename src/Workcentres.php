<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class Workcentres extends Model {
	protected $table = 'workcentres';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'inactive' => 'bool'
	];

	protected $fillable = [
		'name',
		'description',
		'inactive'
	];
}
