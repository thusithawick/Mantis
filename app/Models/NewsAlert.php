<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NewsAlert
 * 
 * @property int $id
 * @property string $Title
 * @property string $Url
 * @property int $status
 *
 * @package App\Models
 */
class NewsAlert extends Model
{
	protected $table = 'news_alert';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'Title',
		'Url',
		'status'
	];
}
