<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class Debitors extends Model {
	protected $table = 'fa_debtor_master';
	protected $primaryKey = 'id';
}
