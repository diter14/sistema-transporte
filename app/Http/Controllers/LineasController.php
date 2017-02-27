<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LineasController extends Controller
{
	public function index()
	{
		return view('lineas.index');
	}
}
