<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 17 Jul 2018 06:30:07 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Votacione
 * 
 * @property int $id
 * @property int $candidatoId
 * @property int $numeroVoto
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @package App\Models
 */
class Votacione extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'candidatoId' => 'int',
		'numeroVoto' => 'int'
	];

	protected $fillable = [
		'candidatoId',
		'numeroVoto'
	];
}
