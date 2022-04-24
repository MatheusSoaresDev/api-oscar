<?php

namespace App\Repositories\Contracts;

interface OscarRepositoryInterface
{
    public function create(array $data);
    public function update(string $anos, array $data);
    public function delete(string $param, string $value);
}
