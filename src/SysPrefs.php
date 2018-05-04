<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class SysPrefs extends Model {
	protected $table = 'sys_prefs';
	protected $primaryKey = 'name';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'name',
		'category',
		'type',
		'length',
		'value'
	];

	public function scopeGeneral($query)
	{
		return $query->where('category', '=', 'glsetup.general');
	}

	public function scopeItems($query)
	{
		return $query->where('category', '=', 'glsetup.items');
	}

	public function scopePurchase($query)
	{
		return $query->where('category', '=', 'glsetup.purchase');
	}

	public function scopeSales($query)
	{
		return $query->where('category', '=', 'glsetup.sales');
	}

	public function scopeCompany($query)
	{
		return $query->where('category', '=', 'setup.company');
	}

	public function scopeCustomer($query)
	{
		return $query->where('category', '=', 'glsetup.customer');
	}

	public function scopeDims($query)
	{
		return $query->where('category', '=', 'glsetup.dims');
	}

	public function scopeManufacturing($query)
	{
		return $query->where('category', '=', 'glsetup.manuf');
	}


	public function scopeInventory($query)
	{
		return $query->where('category', '=', 'glsetup.inventory');
	}
}
