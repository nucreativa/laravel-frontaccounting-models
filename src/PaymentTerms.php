<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class PaymentTerms extends Model {
	protected $table = 'payment_terms';
	protected $primaryKey = 'term_indicator';
	public $timestamps = false;

	protected $casts = [
		'days_before_due' => 'int',
		'day_in_following_month' => 'int',
		'inactive' => 'bool'
	];

	protected $fillable = [
		'terms',
		'days_before_due',
		'day_in_following_month',
		'inactive'
	];
}
