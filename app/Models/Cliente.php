<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $fillable = [
        'nm_pessoa' , 
        'nm_sondex' ,
        'nm_metaphone' ,
        'num_cpf_cnpj' , 
        'ds_email' , 
        'num_telefone' ,
        'num_celular' ,
        'num_cep' , 
        'tp_logradouro' , 
        'ds_logradouro' , 
        'num_logradouro' , 
        'ds_complemento' , 
        'ds_bairro' , 
        'ds_cidade' , 
        'ds_uf',
        'tp_pessoa',
        'id_ativo' ,
        'ds_observacao' ,
        'id_user_cadastro'
    ];
}
