<?php

namespace App\Repositories\Eloquent;

use App\Models\Oscar;
use App\Models\Premio;
use App\Repositories\Contracts\OscarRepositoryInterface;
use Exception;
use Illuminate\Support\Facades\DB;

class OscarRepository extends AbstractRepository implements OscarRepositoryInterface
{
    protected $model = Oscar::class;

    public function index()
    {
        $oscar = $this->model::with('premios')->get();
        return $oscar;
    }

    public function create(array $data)
    {
        try{
            $data = (object)$data;

            $this->verificaAno($data->data);
        } catch (Exception $error){
            return response()->json([
                'error_description' => $error->getMessage(),
                'error_code' => 401,
                'timestamp' => date('Y-m-d H:m:s')
            ], 401);
        }
        return parent::create((array)$data);
    }

    public function verificaAno(string $date)
    {
        $date = explode("-", $date);
        $query = $this->model::whereYear('data', '=', $date[0])->get();

        if(count($query) > 0){
            throw new Exception("Já existe uma cerimônia registrada no ano de $date[0]");
        }
    }
}
