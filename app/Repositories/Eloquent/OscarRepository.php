<?php

namespace App\Repositories\Eloquent;

use App\Models\Oscar;
use App\Repositories\Contracts\OscarRepositoryInterface;

class OscarRepository extends AbstractRepository implements OscarRepositoryInterface
{
    protected $model = Oscar::class;
    protected array $data;

    public function create(array $data)
    {
        $this->data = $data;
        $this->getAndSeparateYearOfDate();
        return parent::create($this->data);
    }

    public function update(string $param, string $value, array $data)
    {
        $this->data = $data;
        $this->getAndSeparateYearOfDate();
        return parent::update($param, $value, $this->data);
    }

    public function getOscar()
    {
        return $this->queryAllOscars()->get();
    }

    public function getOscarByYear(int $ano)
    {
        return $this->queryAllOscars()
            ->whereYear('data', $ano)
            ->get();
    }

    private function queryAllOscars()
    {
        return $this->model->with([
            'premios_filmes.indicados' => function ($query){
                $query->select('*');
            }, 'premios_artistas.indicados' => function ($query){
                $query->select('*');
            }
        ]);
    }

    private function getAndSeparateYearOfDate():void
    {
        $date = explode("-", $this->data["data"]);
        $this->data["ano"] = $date[0];
    }
}
