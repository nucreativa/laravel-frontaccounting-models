<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class LocationStock extends Model {
	protected $table = 'fa_loc_stock';
	protected $primaryKey = 'loc_code';
}
