<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class CRMPersons extends Model {
	protected $table = 'crm_persons';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'inactive' => 'bool'
	];

	protected $fillable = [
		'ref',
		'name',
		'name2',
		'address',
		'phone',
		'phone2',
		'fax',
		'email',
		'lang',
		'notes',
		'inactive'
	];
}
