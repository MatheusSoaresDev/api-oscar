<?php

namespace App\Repositories\Eloquent\Oscar;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class GetOscars extends OscarAbstractRepository
{
    public function getAllOscars()
    {
        $oscar = $this->queryAllOscars()->get();
        if(!$oscar->count()){
            throw new ModelNotFoundException("Não foi encontrado nenhuma cerimônia cadastrada!");
        }

        return $oscar;
    }
}
