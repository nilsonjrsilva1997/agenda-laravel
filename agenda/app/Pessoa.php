<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{    
    // App\Pessoa::create(['nome'=>'jeane']);
    protected $fillable = ['nome', 'id'];

	protected $table = 'pessoas';

	public function telefone() {
		return $this->hasMany(Telefone::class, 'pessoa_id');
	}
}
