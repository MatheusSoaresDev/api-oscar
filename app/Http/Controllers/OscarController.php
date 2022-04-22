<?php

namespace App\Http\Controllers;

use App\Http\Requests\OscarCreateRequest;
use App\Http\Requests\OscarUpdateRequest;
use App\Repositories\Contracts\OscarRepositoryInterface;

class OscarController //extends BaseController
{
    private OscarRepositoryInterface $oscarRepository;

    public function __Construct(OscarRepositoryInterface $oscarRepository)
    {
        $this->oscarRepository = $oscarRepository;
    }

    public function create(OscarCreateRequest $request)
    {
        return response()->json($this->oscarRepository->create($request->all()), 200);
    }

    public function getOscar()
    {
        return response()->json($this->oscarRepository->getOscar());
    }

    public function getOscarByYear(int $ano)
    {
        return response()->json($this->oscarRepository->getOscarByYear($ano));
    }

    public function update(OscarUpdateRequest $request, int $ano)
    {
        return response()->json($this->oscarRepository->update('ano', $ano, $request->all()));
    }

    public function delete(int $ano)
    {
        return response()->json($this->oscarRepository->delete('ano', $ano));
    }
}
