<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model {
	protected $table = 'journal';
	protected $primaryKey = 'trans_no';
}
