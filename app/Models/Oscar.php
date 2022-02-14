<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Nonstandard\Uuid;

class Oscar extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = ['uuid', 'local', 'data', 'cidade', 'apresentador'];
    protected $table = 'Oscar';

    protected $primaryKey = 'uuid';
    protected $keyType = 'string';
    public $incrementing = false;

    protected static function booted()
    {
        static::creating(fn(Oscar $oscar) => $oscar->uuid = (string) Uuid::uuid4());
    }
}