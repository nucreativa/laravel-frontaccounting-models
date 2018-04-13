<?php

namespace Nucreativa\LaravelFrontaccountingModels;

use CoenJacobs\EloquentCompositePrimaryKeys\HasCompositePrimaryKey;
use Illuminate\Database\Eloquent\Model;

class Voided extends Model {
	use HasCompositePrimaryKey;

	protected $table = 'voided';
	protected $primaryKey = [ 'id', 'type' ];
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
		'date_',
		'memo_'
	];
}
