<?php

namespace App\Repositories\Eloquent\Oscar;

use DateTime;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CreateOscar extends OscarAbstractRepository
{
    public function create(array $data)
    {
        $this->data = $data;
        $this->verifyExistsOscarYear();

        return $this->model->create($data);
    }

    private function verifyExistsOscarYear():void
    {
        $ano = $this->returnYear($this->data["data"]);
        $oscar = $this->model->whereYear('data', '=', $ano)->get();

        if(count($oscar)){
            throw new ModelNotFoundException("Já existe uma cerimônia cadastrada no ano de $ano.", 400);
        }
    }

    private function returnYear(string $data)
    {
        return (DateTime::createFromFormat("Y-m-d", $data))->format("Y");
    }
}
