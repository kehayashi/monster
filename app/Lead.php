<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model {

	protected $table = 'lead';

	protected $primaryKey = 'id';

	public $timestamps = false;

	protected $fillable = array(
				'id',
				'valorParcela',
				'valorImovel',
				'nome',
				'email',
        'tipoFamilia',
				'regiao'
        'valorRenda'
        );
}
