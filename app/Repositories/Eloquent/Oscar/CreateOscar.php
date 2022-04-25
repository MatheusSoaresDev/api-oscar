<?php

namespace App\Repositories\Eloquent\Oscar;

use DateTime;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CreateOscar extends OscarAbstractRepository
{
    public function create(array $data)
    {
        $this->verifyExistsOscarYear($data["data"]);
        return $this->model->create($data);
    }

    private function verifyExistsOscarYear(string $data_cerimonia):void
    {
        $ano = $this->returnYear($data_cerimonia);
        $oscar = $this->findOscarByYear($ano);

        if($oscar){
            throw new ModelNotFoundException("Já existe uma cerimônia cadastrada no ano de $ano.", 400);
        }
    }
}
