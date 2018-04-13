<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class ChartType extends Model {
	protected $table = 'chart_types';
	protected $primaryKey = 'id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'inactive' => 'bool'
	];

	protected $fillable = [
		'name',
		'class_id',
		'parent',
		'inactive'
	];
}
