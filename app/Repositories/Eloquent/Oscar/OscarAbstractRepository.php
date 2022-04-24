<?php

namespace App\Repositories\Eloquent\Oscar;

use App\Models\Oscar;
use App\Repositories\Contracts\OscarRepositoryInterface;
use DateTime;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

abstract class OscarAbstractRepository
{
    protected $model = Oscar::class;
    //protected array $data;

    public function __Construct()
    {
        $this->model = app($this->model);
    }

    /*public function update(string $ano, array $data)
    {
        $this->data = $data;
        $oscar = $this->model->whereYear("data", '=', $ano)->first();
        $this->verifyIfUpdateYear($oscar->data, $ano);

        return $this->model->whereYear("data", '=', $ano)->update($this->data);

        //dd($this->model->whereYear("data", '=', $this->returnYear($this->data["data"]))->update($data));
    }

    public function delete(string $param, string $value)
    {
        // TODO: Implement delete() method.
    }

    public function getOscar()
    {
        $oscar = $this->queryAllOscars()->get();
        if(!$oscar->count()){
            throw new ModelNotFoundException("Não foi encontrado nenhuma cerimônia cadastrada!");
        }

        return $oscar;
    }

    public function getOscarByYear(int $ano)
    {
        $oscar = $this->queryAllOscars()->whereYear('data', $ano)->first();
        if(!$oscar){
            throw new ModelNotFoundException("Não foi encontrado nenhuma cerimônia no ano de $ano.");
        }

        return $oscar;
    }

    private function queryAllOscars()
    {
        return $this->model->with(['premios_producoes.indicados.producao', 'premios_artistas.indicados.artista', 'premios_artistas.indicados.filme']);
    }

    private function verifyIfUpdateYear(int $anoBD, $anoInformado)
    {

    }*/
}
