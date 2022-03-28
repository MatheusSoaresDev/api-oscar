<?php

namespace App\Repositories\Contracts;

interface OscarRepositoryInterface
{
    public function all();

    public function create(array $data);

    public function update(string $param, string $value, array $data);

    public function delete(string $param, string $value);
}
