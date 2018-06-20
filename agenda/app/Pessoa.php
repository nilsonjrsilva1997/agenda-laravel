<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    // php artisan make:model <nome da model>
    // php artisan make:migration cria_tabela_pessoas 
    protected $filable = [
    	'id',
    	'nome'
    ];

    protected $table = 'pessoas';
}
