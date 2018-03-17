<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class AuditTrail extends Model {
	protected $table = 'audit_trail';
	protected $primaryKey = 'id';
}
