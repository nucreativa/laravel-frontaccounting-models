<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use CoenJacobs\EloquentCompositePrimaryKeys\HasCompositePrimaryKey;
use Illuminate\Database\Eloquent\Model;

class ItemTaxTypeExemptions extends Model {
	use HasCompositePrimaryKey;

	protected $table = 'item_tax_type_exemptions';
	protected $primaryKey = [ 'item_tax_type_id', 'tax_type_id' ];
}
