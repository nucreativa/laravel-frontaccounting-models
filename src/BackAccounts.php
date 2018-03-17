<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class BackAccounts extends Model {
	protected $table = 'fa_bank_accounts';
	protected $primaryKey = 'id';
}
