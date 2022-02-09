<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Edicao extends Model
{
    public $timestamps = true;
    protected $fillable = ['id', 'ano', 'local', 'data', 'cidade'];
    protected $table = 'edicao';
}
