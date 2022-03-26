<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producao extends Premio
{
    protected $table = 'premio_producao';

    public function indicados()
    {
        return $this->belongsToMany(Filme::class);
    }
}
