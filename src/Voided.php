<?php

namespace Nucreativa\LaravelFrontaccountingModels;

use CoenJacobs\EloquentCompositePrimaryKeys\HasCompositePrimaryKey;
use Illuminate\Database\Eloquent\Model;

class Voided extends Model {
	use HasCompositePrimaryKey;

	protected $table = 'workcentres';
	protected $primaryKey = [ 'id', 'type' ];
}
