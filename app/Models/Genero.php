<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genero extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = ['id', 'nome', 'descricao'];
    protected $table = 'genero';
    protected $visible = ['id', 'nome', 'descricao'];

    public function filmes()
    {
        return $this->belongsToMany(Filme::class);
    }
}
