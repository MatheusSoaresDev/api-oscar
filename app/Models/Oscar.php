<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Nonstandard\Uuid;

class Oscar extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = ['id', 'local', 'data', 'cidade', 'apresentador'];
    protected $table = 'oscar';
    protected $visible = ['id', 'local', 'data', 'cidade', 'apresentador', 'premios_filmes', 'premios_artistas'];

    //protected $primaryKey = 'id';
    //protected $keyType = 'string';
    //public $incrementing = true;

    /*protected static function booted()
    {
        static::creating(fn(Oscar $oscar) => $oscar->uuid = (string) Uuid::uuid4());
    }*/

    public function premios_filmes()
    {
        return $this->hasMany(Producao::class);
    }

    public function premios_artistas()
    {
        return $this->hasMany(Pessoa::class);
    }
}
