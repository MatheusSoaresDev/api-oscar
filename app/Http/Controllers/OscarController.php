<?php

namespace App\Http\Controllers;

use App\Models\Edicao;
use http\Env\Request;

class OscarController extends Controller
{
    public function create()
    {
        $oscar = new Edicao();
        $oscar->id = uniqid('ed_');
        $oscar->ano = '2014';
        $oscar->local = 'Teatro Dolby';
        $oscar->data = '2014-03-02';
        $oscar->cidade = 'Los Angeles, Califórnia EUA';

        $oscar->save();
    }

    public function getAll()
    {
        return Edicao::all();
    }

    public function getAno(int $ano)
    {
        return Edicao::where('ano', $ano)->get();
    }
}
