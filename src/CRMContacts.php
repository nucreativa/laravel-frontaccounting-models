<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class CRMContacts extends Model {
	protected $table = 'rm_contacts';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'person_id' => 'int'
	];

	protected $fillable = [
		'person_id',
		'type',
		'action',
		'entity_id'
	];
}
