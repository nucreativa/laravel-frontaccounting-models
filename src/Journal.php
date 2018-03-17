<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model {
	protected $table = 'fa_journal';
	protected $primaryKey = 'trans_no';
}
