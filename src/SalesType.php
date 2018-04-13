<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class SalesType
 * 
 * @property int $id
 * @property string $sales_type
 * @property int $tax_included
 * @property float $factor
 * @property bool $inactive
 *
 * @package Nucreativa\LaravelFrontAccountingModels
 */
class SalesType extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'tax_included' => 'int',
		'factor' => 'float',
		'inactive' => 'bool'
	];

	protected $fillable = [
		'sales_type',
		'tax_included',
		'factor',
		'inactive'
	];
}
