<?php

namespace App\Repositories\Rules;

use App\Repositories\Eloquent\Oscar\CreateOscar;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class OscarRules
{
    private CreateOscar $createOscar;

    public function __Construct(CreateOscar $createOscar)
    {
        $this->createOscar = $createOscar;
    }

    public function create(array $data)
    {
        try {
            return responder()->success($this->createOscar->create($data))->respond(200);
        } catch (ModelNotFoundException $error){
            return responder()->error($error->getCode(), $error->getMessage())->respond(400);
        }
    }

    /*public function update(string $ano, array $data)
    {
        try{
            return responder()->success($this->oscarRepository->update($ano, $data))->respond(200);
        } catch (ModelNotFoundException $error){
            return responder()->error($error->getCode(), $error->getMessage())->respond(400);
        }
    }

    public function delete(string $param, string $value)
    {
        // TODO: Implement delete() method.
    }

    public function getOscar()
    {
        try{
            return responder()->success($this->oscarRepository->getOscar())->respond(200);
        } catch (ModelNotFoundException $error){
            return responder()->error($error->getCode(), $error->getMessage())->respond(400);
        }
    }

    public function getOscarByYear(int $ano)
    {
        try{
            return responder()->success($this->oscarRepository->getOscarByYear($ano))->respond(200);
        } catch (ModelNotFoundException $error){
            return responder()->error($error->getCode() ,$error->getMessage())->respond(500);
        }
    }*/
}
