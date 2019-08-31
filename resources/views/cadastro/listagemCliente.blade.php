@extends('layouts.app')

@section('content')

<div class="outter-wp">
        <!--/sub-heard-part-->
    <div class="sub-heard-part">
        <ol class="breadcrumb m-b-0">
            <li><a href="">Cadastro</a></li>
            <li class="active">Listar Clientes</li>
        </ol>
    </div>
    <?php if(!empty($cliente)):?>
    <div class="graph">
        <div class="tables">
            <table class="table table-bordered"> 
                <thead> 
                    <tr> 
                        <th>Registro</th> 
                        <th>Nome Cliente</th> 
                        <th>CPF/CNPJ</th> 
                        <th>Email</th>
                        <th>Situação</th>
                        <th>Ação</th>
                    </tr> 
                </thead> 
                <tbody> 
                    @foreach($cliente as $list)
                        <tr> 
                            <td style="text-align: center; width:10%;">{{  $list->id }}</td>
                            <td>{{  $list->nm_pessoa }}</td>
                            <td>{{  $list->num_cpf_cnpj }}</td>                            
                            <td>{{  $list->ds_email }}</td>
                            <td>{{  $list->id_ativo }} </td>
                            <td style="text-align: center; width:15%;">
                                <a href="{{ url('cliente/create') }}"><span class="label label-primary" title="Editar Registro"><i class="fa fa-edit"></i> EDITAR</span></a>
                                <a href="{{ url('cliente/create') }}"><span class="label label-danger" title="Inativar Registro"><i class="fa fa-times-circle"></i> EXCLUIR</span></a>
                            </td>
                        </tr> 
                    @endforeach
                </tbody>
            </table> 
        </div>
    </div>
    <?php else :?>
        <div class="alert alert-danger fade in" style="text-align: center;">
            <strong>NÃO EXISTEM DADOS CADASTRADOS, CLIQUE NO BOTÃO "ADICIONAR PACIENTE" PARA REALIZAR OS CADASTROS</strong>
        </div>
    <?php endif;?>
    <div class="navbar-btn-right">
        <a href="{{ url('cliente/create') }}">
            <button class="btn btn-success" type="button"><i class="fa fa-plus-circle"></i> Adicionar Cliente</button>
        </a> 
    </div>
</div>

@endsection