<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class StockMoves extends Model {
	protected $table = 'stock_moves';
	protected $primaryKey = 'trans_id';
}
