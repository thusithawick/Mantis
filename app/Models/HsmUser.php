<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HsmUser
 * 
 * @property int $id
 * @property string $epf
 * @property string $full_name
 * @property string $designation
 * @property string $address
 * @property string $con_no
 * @property string $mobile
 * @property string $division
 * @property string $branch
 * @property string $catagory
 * @property string $mantis_user
 * @property string $status
 * @property string $cat
 * @property string $dept_id
 * @property string $photo
 * @property string $province
 *
 * @package App\Models
 */
class HsmUser extends Model
{
	protected $table = 'hsm_user';
	public $timestamps = false;

	protected $fillable = [
		'epf',
		'full_name',
		'designation',
		'address',
		'con_no',
		'mobile',
		'division',
		'branch',
		'catagory',
		'mantis_user',
		'status',
		'cat',
		'dept_id',
		'photo',
		'province'
	];
}
