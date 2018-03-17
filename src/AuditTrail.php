<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class AuditTrail extends Model {
	protected $table = 'fa_audit_trail';
	protected $primaryKey = 'id';
}
