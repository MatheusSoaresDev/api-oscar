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
    protected $visible = ['id', 'local', 'data', 'cidade', 'apresentador', 'premios_producoes', 'premios_artistas'];

    public function premios_producoes()
    {
        return $this->hasMany(Premio_Producao::class);
    }

    public function premios_artistas()
    {
        return $this->hasMany(Premio_Pessoa::class);
    }
}
