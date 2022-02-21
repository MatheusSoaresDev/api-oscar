<?php

namespace App\Http\Controllers;

use App\Http\Requests\OscarCreateRequest;
use App\Repositories\Contracts\OscarRepositoryInterface;
use Illuminate\Http\Request;

class OscarController //extends BaseController
{
    private OscarRepositoryInterface $oscarRepository;

    public function __Construct(OscarRepositoryInterface $oscarRepository)
    {
        $this->oscarRepository = $oscarRepository;
    }

    public function index()
    {
        return response()->json($this->oscarRepository->index());
    }

    public function create(OscarCreateRequest $request)
    {
        return response()->json($this->oscarRepository->create($request->all()));
    }

    public function getAno(int $ano)
    {
        //return Oscar::where('ano', $ano)->get();
    }
}
