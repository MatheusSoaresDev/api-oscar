<?php

namespace App\Http\Controllers;

use App\Http\Requests\OscarCreateRequest;
use App\Http\Requests\OscarUpdateRequest;
use App\Repositories\Eloquent\Oscar\CreateOscar;
use App\Repositories\Rules\OscarRules;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class OscarController
{
    private OscarRules $oscarRules;

    public function __Construct(OscarRules $oscarRules)
    {
        $this->oscarRules = $oscarRules;
    }

    public function create(OscarCreateRequest $request)
    {
        return $this->oscarRules->create($request->all());
    }

    public function update(int $ano, OscarUpdateRequest $request)
    {
        return $this->oscarRules->update($ano, $request->all());
    }

    public function delete(int $ano)
    {
        return $this->oscarRules->delete($ano);
    }

    public function getAllOscars()
    {
        return $this->oscarRules->getOscar();
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
