<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Nonstandard\Uuid;

class Premio extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = ['id', 'nome', 'oscar_id'];
    protected $table = 'premio';

    protected $visible = ['id', 'nome'];

    //protected $primaryKey = 'id';
    //protected $keyType = 'string';
    //public $incrementing = true;

    /*protected static function booted()
    {
        static::creating(fn(Premio $premio) => $premio->uuid = (string) Uuid::uuid4());
    }*/

    public function oscar()
    {
        return $this->belongsTo(Oscar::class);
    }
}
