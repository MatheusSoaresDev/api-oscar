<?php

namespace App\Http\Controllers;

use App\Models\Edicao;
use App\Repositories\OscarRepository;
use http\Env\Request;
use Psy\Util\Str;

abstract class BaseController
{
    protected $classe;
    protected $repositoryName;



    public function create(Request $request)
    {
        //$this->model->create();

        /*$oscar = new Edicao();
        $oscar->ano = '2015';
        $oscar->local = 'Teatro Dolby';
        $oscar->data = '2014-03-02';
        $oscar->cidade = 'Los Angeles, Califórnia EUA';
        $oscar->save();*/
    }

    private function getRepository()
    {
        return $this->repositoryName;
    }
}
