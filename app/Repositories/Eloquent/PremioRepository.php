<?php

namespace App\Repositories\Eloquent;

use App\Models\Premio;
use App\Repositories\Contracts\PremioRepositoryInterface;

class PremioRepository extends AbstractRepository implements PremioRepositoryInterface
{
    protected $model = Premio::class;
}
