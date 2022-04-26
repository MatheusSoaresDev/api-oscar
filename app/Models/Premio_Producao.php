<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Premio_Producao extends Model
{
    use HasFactory;

    protected $table = 'premio_producao';
    public $timestamps = true;
    protected $fillable = ['id', 'nome', 'oscar_id'];
    protected $visible = ['id', 'nome', 'indicados', 'pessoas'];

    public function oscars_premios_producoes() //N pra N//
    {
        return $this->hasMany(Oscar_Premio_Producao::class, 'id_oscar');
    }

    /*public function oscar()
    {
        return $this->belongsTo(Oscar::class);
    }

    public function indicados()
    {
        return $this->hasMany(Producao_Filme::class, 'premio_producao_id');
    }*/

}
