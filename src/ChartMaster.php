<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class ChartMaster extends Model {
	protected $table = 'fa_char_master';
	protected $primaryKey = 'account_code';
}
