<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Filme extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = ['id', 'nome', 'data_lancamento', 'distribuidora'];
    protected $table = 'filme';
    protected $visible = ['id', 'nome', 'data_lancamento', 'distribuidora'];

    public function premios()
    {
        return $this->belongsToMany(Premio::class);
    }

}
