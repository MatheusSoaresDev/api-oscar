<?php

namespace App\Repositories\Eloquent\Oscar;

use Exception;

class DeleteOscar extends OscarAbstractRepository
{
    public function delete(int $ano)
    {
        $oscar = $this->findOscarByYear($ano);
        $this->VerifyExistsOscarWithInformedYear($ano);

        if(!$oscar->truncate()){
            throw new Exception("Houve um erro na exclusão. Verifique sua conexão!");
        }

        return ['Cerimônia excluida com sucesso!'];
    }
}
