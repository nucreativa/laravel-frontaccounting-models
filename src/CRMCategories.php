<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class CRMCategories extends Model {
	protected $table = 'crm_categories';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'system' => 'bool',
		'inactive' => 'bool'
	];

	protected $fillable = [
		'type',
		'action',
		'name',
		'description',
		'system',
		'inactive'
	];
}
