<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class ExchangeRates extends Model {
	protected $table = 'fa_exchange_rates';
	protected $primaryKey = 'id';
}
