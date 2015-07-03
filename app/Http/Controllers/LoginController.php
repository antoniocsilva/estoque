<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use Request;

class LoginController extends Controller
{
    public function login()
    {
    	$credenciais = Request::only('email', 'password');
    	if(Auth::attempt($credenciais, true))
    	{
    		return "Usuário ".
    		Auth::user()->name
    		." logado com sucesso";
    	}
    	return "As credenciais não são válidas";
    }

    // public function logout()
    // {
    //     return return redirect()
    //         ->action('ProdutoController@lista');
    }
}
