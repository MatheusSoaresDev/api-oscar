<?php

namespace App\Repositories\Eloquent;

abstract class AbstractRepository
{
    protected $model;

    public function __Construct()
    {
        $this->model = $this->resolveModel();
    }

    public function create(array $data)
    {
       return $this->model->create($data);
    }

    public function update(string $param, string $value, array $data)
    {
        return $this->model->where($param, $value)->update($data);
    }

    public function delete(string $param, string $value)
    {
        return $this->model->where($param, $value)->truncate();
    }

    protected function resolveModel()
    {
        return app($this->model);
    }
}
