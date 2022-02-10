<?php

namespace App\Http\Controllers;

use App\Models\Edicao;
use App\Repositories\Contracts\OscarRepositoryInterface;

class OscarController //extends BaseController
{

    public function index(OscarRepositoryInterface $model)
    {
        return $model->all();
    }

    public function getAno(int $ano)
    {
        return Edicao::where('ano', $ano)->get();
    }
}
