<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class ExchangeRates extends Model {
	protected $table = 'exchange_rates';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'rate_buy' => 'float',
		'rate_sell' => 'float'
	];

	protected $dates = [
		'date_'
	];

	protected $fillable = [
		'curr_code',
		'rate_buy',
		'rate_sell',
		'date_'
	];
}
