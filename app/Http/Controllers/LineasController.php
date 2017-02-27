<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Empresa;

class LineasController extends Controller
{
	public function index()
	{	
		$lineas = Empresa::all();
		return view('lineas.index',compact('lineas'));
	}

	public function show(Bus $bus)
	{
		return view('lineas.show',compact('bus'));
	}

}
