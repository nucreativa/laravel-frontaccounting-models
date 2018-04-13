<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class BackAccounts extends Model {
	protected $table = 'bank_accounts';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'account_type' => 'int',
		'dflt_curr_act' => 'bool',
		'ending_reconcile_balance' => 'float',
		'inactive' => 'bool'
	];

	protected $dates = [
		'last_reconciled_date'
	];

	protected $fillable = [
		'account_code',
		'account_type',
		'bank_account_name',
		'bank_account_number',
		'bank_name',
		'bank_address',
		'bank_curr_code',
		'dflt_curr_act',
		'bank_charge_act',
		'last_reconciled_date',
		'ending_reconcile_balance',
		'inactive'
	];
}
