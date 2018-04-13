<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model {
	protected $table = 'comments';
	protected $primaryKey = 'id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'type' => 'int',
		'id' => 'int'
	];

	protected $dates = [
		'date_'
	];

	protected $fillable = [
		'type',
		'id',
		'date_',
		'memo_'
	];
}
