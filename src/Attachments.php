<?php

namespace Nucreativa\LaravelFrontAccountingModels;

use Illuminate\Database\Eloquent\Model;

class Attachments extends Model {
	protected $table = 'attachments';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'type_no' => 'int',
		'trans_no' => 'int',
		'filesize' => 'int'
	];

	protected $dates = [
		'tran_date'
	];

	protected $fillable = [
		'description',
		'type_no',
		'trans_no',
		'unique_name',
		'tran_date',
		'filename',
		'filesize',
		'filetype'
	];
}
