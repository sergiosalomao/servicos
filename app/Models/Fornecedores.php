<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedores extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nome', 'telefone', 'email', 'cpf_cnpj', 'endereco', 'status'];
    protected $table = 'fornecedores';
}
