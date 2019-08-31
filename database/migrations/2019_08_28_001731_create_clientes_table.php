<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nm_pessoa',200);
            $table->string('nm_sondex',10);
            $table->string('nm_metaphone',10);
            $table->string('num_cpf_cnpj',20);
            $table->string('ds_email',60);
            $table->string('num_telefone',20);
            $table->string('num_celular',20);
            $table->string('num_cep',12);
            $table->string('ds_uf',2);
            $table->string('ds_logradouro',120);
            $table->string('ds_complemento',120);
            $table->integer('num_logradouro');
            $table->string('ds_bairro',50);
            $table->string('ds_cidade',50);
            $table->string('tp_pessoa',1);
            $table->boolean('id_ativo');
            $table->longText('ds_observacao');
            $table->integer('id_user_cadastro');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
