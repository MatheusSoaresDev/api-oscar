<?php

namespace App\Models;

class Pessoa extends Premio
{
    protected $table = 'premio_pessoa';

    public function indicados()
    {
        return $this->belongsToMany(Artista::class);
    }
}
