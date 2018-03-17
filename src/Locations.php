<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model {
	protected $table = 'fa_locations';
	protected $primaryKey = 'loc_code';
}
