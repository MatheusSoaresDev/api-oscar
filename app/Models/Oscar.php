<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Nonstandard\Uuid;

class Oscar extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = ['id', 'local', 'data', 'cidade', 'apresentador', 'ano'];
    protected $table = 'oscar';
    protected $visible = ['id', 'local', 'data', 'cidade', 'apresentador', 'oscars_premios_producoes'];

    public function oscars_premios_producoes() //N pra N//
    {
        return $this->hasMany(Oscar_Premio_Producao::class);
    }

    /*public function premios_artistas()
    {
        return $this->hasMany(Premio_Pessoa::class);
    }*/
}
