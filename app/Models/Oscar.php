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

    //protected $primaryKey = 'id';
    //protected $keyType = 'string';
    //public $incrementing = true;

    /*protected static function booted()
    {
        static::creating(fn(Oscar $oscar) => $oscar->uuid = (string) Uuid::uuid4());
    }*/

    public function premios()
    {
        return $this->hasMany(Premio::class);
    }
}
