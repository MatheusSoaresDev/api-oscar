<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artista extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = ['id', 'nome', 'nascimento', 'nacionalidade', 'localNascimento', 'altura'];
    protected $table = 'artista';
    protected $visible = ['id', 'nome', 'nascimento', 'nacionalidade', 'localNascimento', 'altura', 'vencedor'];

    public function premios()
    {
        return $this->belongsToMany(Pessoa::class);
    }
}
