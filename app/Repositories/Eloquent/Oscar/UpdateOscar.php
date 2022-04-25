<?php

namespace App\Repositories\Eloquent\Oscar;

use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateOscar extends OscarAbstractRepository
{
    public function update(int $ano, array $data)
    {
        $oscar = $this->findOscarByYear($ano);

        $this->VerifyExistsOscarWithInformedYear($ano);
        $this->verifyIfUpdateYearNotEqual($this->returnYear($oscar->data), $this->returnYear($data["data"]));

        $oscar->update($data);
        return $oscar;
    }

    private function verifyIfUpdateYearNotEqual(int $anoBD, int $anoInformado):void
    {
        if($anoBD != $anoInformado){
            throw new Exception("O ano da cerimônia não pode ser alterado!", 400);
        }
    }
}
