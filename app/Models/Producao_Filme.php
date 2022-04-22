<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producao_Filme extends Model
{
    protected $table = 'producao_filme';
    public $timestamps = true;
    protected $fillable = ['id', 'vencedor', 'premio_producao_id', 'filme_id'];
    protected $visible = ['id', 'vencedor', 'producao'];

    public function indicados()
    {
        return $this->belongsTo(Premio_Producao::class);
    }

    public function producao()
    {
        return $this->belongsTo(Filme::class, 'filme_id');
    }
}
