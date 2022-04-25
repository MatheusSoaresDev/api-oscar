<?php

namespace App\Repositories\Rules;

use App\Repositories\Eloquent\Oscar\CreateOscar;
use App\Repositories\Eloquent\Oscar\DeleteOscar;
use App\Repositories\Eloquent\Oscar\GetAllOscars;
use App\Repositories\Eloquent\Oscar\UpdateOscar;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class OscarRules
{
    private CreateOscar $createOscar;
    private UpdateOscar $updateOscar;
    private DeleteOscar $deleteOscar;
    private GetAllOscars $getAllOscars;

    public function __Construct(CreateOscar $createOscar, UpdateOscar $updateOscar, DeleteOscar $deleteOscar, GetAllOscars $getAllOscars)
    {
        $this->createOscar = $createOscar;
        $this->updateOscar = $updateOscar;
        $this->deleteOscar = $deleteOscar;
        $this->getAllOscars = $getAllOscars;
    }

    public function create(array $data)
    {
        try {
            return responder()->success($this->createOscar->create($data))->respond(200);
        } catch (ModelNotFoundException $error){
            return responder()->error($error->getCode(), $error->getMessage())->respond(400);
        }
    }

    public function update(int $ano, array $data)
    {
        try{
            return responder()->success($this->updateOscar->update($ano, $data))->respond(200);
        } catch (Exception $error){
            return responder()->error($error->getCode(), $error->getMessage())->respond($error->getCode());
        }
    }

    public function delete(int $ano)
    {
        try{
            return responder()->success($this->deleteOscar->delete($ano))->respond(200);
        } catch (Exception $error){
            return responder()->error($error->getCode(), $error->getMessage())->respond($error->getCode());
        }
    }

    public function getOscar()
    {
        try{
            return responder()->success($this->getAllOscars->getAllOscars())->respond(200);
        } catch (ModelNotFoundException $error){
            return responder()->error($error->getCode(), $error->getMessage())->respond(400);
        }
    }

    /*public function getOscarByYear(int $ano)
    {
        try{
            return responder()->success($this->oscarRepository->getOscarByYear($ano))->respond(200);
        } catch (ModelNotFoundException $error){
            return responder()->error($error->getCode() ,$error->getMessage())->respond(500);
        }
    }*/
}
