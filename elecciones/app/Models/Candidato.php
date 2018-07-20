<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 17 Jul 2018 06:30:07 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Candidato
 * 
 * @property int $id
 * @property string $nombre
 * @property string $foto
 * @property int $numero_lista
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @package App\Models
 */
class Candidato extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'numero_lista' => 'int'
	];

	protected $fillable = [
		'nombre',
		'foto',
		'numero_lista'
	];
}
