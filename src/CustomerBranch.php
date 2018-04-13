<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class CustomerBranch extends Model {
	protected $table = 'cust_branch';
	protected $primaryKey = 'id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'branch_code' => 'int',
		'debtor_no' => 'int',
		'area' => 'int',
		'salesman' => 'int',
		'tax_group_id' => 'int',
		'default_ship_via' => 'int',
		'group_no' => 'int',
		'inactive' => 'bool'
	];

	protected $fillable = [
		'br_name',
		'branch_ref',
		'br_address',
		'area',
		'salesman',
		'default_location',
		'tax_group_id',
		'sales_account',
		'sales_discount_account',
		'receivables_account',
		'payment_discount_account',
		'default_ship_via',
		'br_post_address',
		'group_no',
		'notes',
		'bank_account',
		'inactive'
	];
}
