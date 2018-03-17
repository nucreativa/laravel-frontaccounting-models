<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class BudgetTransaction extends Model {
	protected $table = 'fa_budget_trans';
	protected $primaryKey = 'id';
}
