<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acesso extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'metodo',
        'ip_cliente',
        'status_code',
    ];
}
