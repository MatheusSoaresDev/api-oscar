<?php

namespace App\Http\Controllers;

use App\Models\Edicao;
use http\Env\Request;

class OscarController extends Controller
{
    public function getAll()
    {
        return Edicao::all();
    }

    public function getAno(int $ano)
    {
        return Edicao::where('ano', $ano)->get();
    }
}
