<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\BancosController;

class Banco extends Model
{
    use HasFactory;

    protected $table = 'bancos';
    protected $fillable = [
        'nome',
        'cpf',
        'email',
        'telefone',
        'tipo_conta',
    ];
}
