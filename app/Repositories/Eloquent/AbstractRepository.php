<?php

namespace App\Repositories\Eloquent;

abstract class AbstractRepository
{
    protected $model;

    public function __Construct()
    {
        $this->model = $this->resolveModel();
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create(array $data)
    {
       return $this->model->create($data);
    }

    public function update(array $data)
    {

    }

    public function delete(string $id)
    {

    }

    protected function resolveModel()
    {
        return app($this->model);
    }
}
