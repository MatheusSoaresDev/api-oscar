<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Filme extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = ['id', 'nome', 'data_lancamento', 'duracao', 'pais', 'distribuidora'];
    protected $table = 'filme';
    protected $visible = ['id', 'nome', 'data_lancamento', 'duracao', 'pais', 'distribuidora', 'vencedor'];

    public function premios()
    {
        return $this->belongsToMany(Producao::class);
    }

    /*public function generos()
    {
        return $this->belongsToMany(Genero::class);
    }*/
}
