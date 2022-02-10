<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Nonstandard\Uuid;

class Edicao extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = ['uuid', 'ano', 'local', 'data', 'cidade'];
    protected $table = 'edicao';

    protected $primaryKey = 'uuid';
    protected $keyType = 'string';
    public $incrementing = false;


    protected static function booted()
    {
        static::creating(fn(Edicao $edicao) => $edicao->uuid = (string) Uuid::uuid4());
    }
}
