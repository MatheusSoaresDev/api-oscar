<?php

namespace App\Http\Controllers;

use App\Http\Requests\PremioCreateRequest;
use App\Repositories\Contracts\PremioRepositoryInterface;
use Illuminate\Http\Request;

class PremioController extends Controller
{
    private PremioRepositoryInterface $premioRepository;

    public function __Construct(PremioRepositoryInterface $premioRepository)
    {
        $this->premioRepository = $premioRepository;
    }

    public function create(PremioCreateRequest $request)
    {
        return response()->json([
            'timestamp' => date('Y-m-d H:m:s'),
            'status_name' => 'Created',
            'status_code' => 201,
            'message' => "Prêmio cadastrado com sucesso.",
            'data' => $this->premioRepository->create($request->all())
        ], 201);
    }
}
