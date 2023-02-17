<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;
    protected $fillable = [
        'descricao',
        'preco',
        'data_validade',
        'data_compra',
        'quantidade',
        'perecivel'
        ];
}
