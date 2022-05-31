<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Manti
 * 
 * @property int $idMantis
 * @property string $Dept_id
 * @property string|null $reporter
 * @property string|null $assignto
 * @property int|null $status
 * @property string|null $prio
 * @property string $Severity
 * @property string $Reproducibility
 * @property string|null $title
 * @property string|null $disc
 * @property string|null $ad_info
 * @property string|null $contact
 * @property string|null $contact_per
 * @property string|null $IpAddress
 * @property Carbon $submited_time
 *
 * @package App\Models
 */
class Manti extends Model
{
	protected $table = 'mantis';
	protected $primaryKey = 'idMantis';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int'
	];

	protected $dates = [
		'submited_time'
	];

	protected $fillable = [
		'Dept_id',
		'reporter',
		'assignto',
		'status',
		'prio',
		'Severity',
		'Reproducibility',
		'title',
		'disc',
		'ad_info',
		'contact',
		'contact_per',
		'IpAddress',
		'submited_time'
	];
}
