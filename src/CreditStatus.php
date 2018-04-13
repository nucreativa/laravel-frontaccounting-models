<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class CreditStatus extends Model {
	protected $table = 'credit_status';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'dissallow_invoices' => 'bool',
		'inactive' => 'bool'
	];

	protected $fillable = [
		'reason_description',
		'dissallow_invoices',
		'inactive'
	];
}
