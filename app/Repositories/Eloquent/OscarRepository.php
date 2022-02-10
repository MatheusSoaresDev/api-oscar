<?php

namespace App\Repositories\Eloquent;

use App\Models\Edicao;
use App\Repositories\Contracts\OscarRepositoryInterface;

class OscarRepository extends AbstractRepository implements OscarRepositoryInterface
{
    protected $model = Edicao::class;
}
