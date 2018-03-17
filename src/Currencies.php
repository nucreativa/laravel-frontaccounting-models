<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class Currencies extends Model {
	protected $table = 'fa_currencies';
	protected $primaryKey = 'curr_abrev';
}
