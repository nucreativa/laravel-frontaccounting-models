<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class PaymentTerms extends Model {
	protected $table = 'payment_terms';
	protected $primaryKey = 'term_indicator';
}
