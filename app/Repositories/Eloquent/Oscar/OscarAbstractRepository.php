<?php

namespace App\Repositories\Eloquent\Oscar;

use App\Models\Oscar;
use App\Models\Oscar_Premio_Producao;
use App\Repositories\Contracts\OscarRepositoryInterface;
use DateTime;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

abstract class OscarAbstractRepository
{
    protected $model = Oscar::class;

    public function __Construct()
    {
        $this->model = app($this->model);
    }

    protected function returnYear(string $data)
    {
        return (DateTime::createFromFormat("Y-m-d", $data))->format("Y");
    }

    protected function findOscarByYear(int $ano){
        return $this->model->whereYear('data', $ano)->first();
    }

    protected function VerifyExistsOscarWithInformedYear(int $ano):void
    {
        $oscar = $this->findOscarByYear($ano);
        if(!$oscar){
            throw new ModelNotFoundException("Não foi encontrado nenhuma cerimônia no ano de $ano.", 401);
        }
    }

    /*

    public function getOscarByYear(int $ano)
    {
        $oscar = $this->queryAllOscars()->whereYear('data', $ano)->first();
        if(!$oscar){
            throw new ModelNotFoundException("Não foi encontrado nenhuma cerimônia no ano de $ano.");
        }

        return $oscar;
    }*/

    protected function queryAllOscars()
    {
        //return $this->model->with(['premios_producoes.indicados.producao', 'premios_artistas.indicados.artista', 'premios_artistas.indicados.filme']);
        return $this->model->with(['oscars_premios_producoes.premio_producao', 'oscars_premios_producoes.indicados.filme']);
    }
}
