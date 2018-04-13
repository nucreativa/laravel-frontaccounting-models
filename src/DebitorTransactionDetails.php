<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class DebitorTransactionDetails extends Model {
	protected $table = 'debtor_trans_details';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'debtor_trans_no' => 'int',
		'debtor_trans_type' => 'int',
		'unit_price' => 'float',
		'unit_tax' => 'float',
		'quantity' => 'float',
		'discount_percent' => 'float',
		'standard_cost' => 'float',
		'qty_done' => 'float',
		'src_id' => 'int'
	];

	protected $fillable = [
		'debtor_trans_no',
		'debtor_trans_type',
		'stock_id',
		'description',
		'unit_price',
		'unit_tax',
		'quantity',
		'discount_percent',
		'standard_cost',
		'qty_done',
		'src_id'
	];

	public function debitorTransaction() {
		return $this->belongsTo( DebitorTransaction::class, 'trans_no', 'debtor_trans_no' );
	}

	public function item() {
		return $this->belongsTo( Item::class, 'stock_id', 'stock_id' );
	}
}
