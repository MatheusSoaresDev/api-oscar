<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Premio_Pessoa extends Model
{
    use HasFactory;

    protected $table = 'premio_pessoa';
    public $timestamps = true;
    protected $fillable = ['id', 'nome', 'oscar_id'];
    protected $visible = ['id', 'nome', 'indicados'];

    public function oscar()
    {
        return $this->belongsTo(Oscar::class);
    }

    public function indicados()
    {
        return $this->hasMany(Pessoa_Artista::class, 'premio_pessoa_id');
    }
}
