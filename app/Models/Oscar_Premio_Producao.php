<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oscar_Premio_Producao extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = ['id', 'nome', 'id_oscar', 'id_premio_producao'];
    protected $table = 'oscar_premio_producao';
    protected $visible = ['id', 'nome', 'premio_producao', 'indicados'];

    public function oscar()
    {
        return $this->belongsTo(Oscar::class);
    }

    public function premio_producao()
    {
        return $this->belongsTo(Premio_Producao::class);
    }

    public function indicados()
    {
        return $this->hasMany(Producao_Filme::class, 'oscar_premio_producao_id');
    }
}
