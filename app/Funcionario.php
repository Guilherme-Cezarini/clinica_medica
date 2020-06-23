<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Funcionario extends Model
{
    use SoftDeletes;
    

    protected $dates = ['created_at', 'updated_at', 'dt_adimissao', 'dt_demissao', 'deleted_at'];

    protected $fillable = ['nome', 'rg', 'cpf', 'telefone', 'email', 'endereco', 'cargo', 'salario', 'dt_adimissao', 'dt_demissao', 'deleted_at', 'activate']; 
}
