<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $jasa = Jasa::all();

        return view('pages.index', compact(['jasa']));
    }
}
