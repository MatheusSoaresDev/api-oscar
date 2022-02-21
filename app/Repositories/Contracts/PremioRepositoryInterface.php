<?php

namespace App\Repositories\Contracts;

interface PremioRepositoryInterface
{
    public function all();

    public function create(array $data);

    public function update(array $data);

    public function delete(string $id);
}
