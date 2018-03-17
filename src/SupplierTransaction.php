<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use CoenJacobs\EloquentCompositePrimaryKeys\HasCompositePrimaryKey;
use Illuminate\Database\Eloquent\Model;

class SupplierTransaction extends Model {
	use HasCompositePrimaryKey;

	protected $table = 'supp_trans';
	protected $primaryKey = [ 'trans_no', 'type' ];

	public function item() {
		return $this->belongsTo( Suppliers::class, 'supplier_id', 'supplier_id' );
	}
}
