<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $dates = ['created_at', 'updated_at', 'dt_adimissao', 'dt_demissao'];

    protected $fillable = ['nome', 'rg', 'cpf', 'telefone', 'email', 'endereco', 'cargo', 'salario', 'dt_adimissao', 'dt_demissao']; 
}
