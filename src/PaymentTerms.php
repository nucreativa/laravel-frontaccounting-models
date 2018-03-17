<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class PaymentTerms extends Model {
	protected $table = 'fa_payment_terms';
	protected $primaryKey = 'term_indicator';
}
