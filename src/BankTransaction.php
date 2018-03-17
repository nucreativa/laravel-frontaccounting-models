<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class BankTransaction extends Model {
	protected $table = 'fa_bank_trans';
	protected $primaryKey = 'id';
}
