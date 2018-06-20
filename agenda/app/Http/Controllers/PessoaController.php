<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PessoaController extends Controller
{
    // php artisan tinker
    public function index() {
    	$list_pessoas = Pessoa::all();
    	return view(view 'pessoas.index', [
    		'pessoas' => $list_pessoas;
    	]);
    }
}
