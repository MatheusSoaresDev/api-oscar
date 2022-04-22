<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pessoa_Artista extends Model
{
    protected $table = 'pessoa_artista';
    public $timestamps = true;
    protected $fillable = ['id', 'vencedor', 'premio_pessoa_id', 'artista_id', 'filme_id'];
    protected $visible = ['id', 'vencedor', 'artista', 'filme'];

    public function indicados()
    {
        return $this->belongsTo(Premio_Pessoa::class);
    }

    public function artista()
    {
        return $this->belongsTo(Artista::class, 'artista_id');
    }

    public function filme()
    {
        return $this->hasOne(Filme::class, 'id');
    }
}
