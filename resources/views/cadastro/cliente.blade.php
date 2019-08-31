@extends('layouts.app')

@section('content')

<div class="outter-wp">
	<!--/sub-heard-part-->
	<div class="sub-heard-part">
		<ol class="breadcrumb m-b-0">
			<li><a href="">Cadastro</a></li>
			<li class="active">Clientes</li>
		</ol>
	</div>
	<div class="forms-main">
		<div class="graph-form">
			<div class="validation-form">
				<form class="form-horizontal group-border hover-stripped" role="form" method="post" action="{{ url('cliente/store') }}">
				{{ csrf_field() }}
					<div class="vali-form">
						<div class="col-md-2 form-group1">
							<label class="control-label">Registro</label>
							<input type="text" class="form-control" name="id_cliente" id="id_cliente" value="">
						</div>
						<div class="col-md-6 form-group2 group mail">
							<label class="control-label">Tipo Cliente</label>
							<select name="tp_pessoa" id="tp_pessoa" required>
								<option></option>
								<option value="F">Física</option>
								<option value="J">Jurídica</option>
							</select>
						</div>
						<div class="col-md-4 form-group1">
							<label class="control-label">Situação</label>
							<input type="text" class="form-control" name="id_ativo" id="id_ativo" value="">
						</div>
					</div>
					<div class="vali-form">
						<div class="col-md-8 form-group1">
							<label class="control-label">Nome</label>
							<input type="text" class="form-control" name="nm_pessoa" id="nm_pessoa"  required value="">
						</div>
						<div class="col-md-4 form-group1 form-last">
							<label class="control-label">CPF/CNPJ</label>
							<input type="text" class="form-control" name="num_cpf_cnpj" id="num_cpf_cnpj" required value="">
						</div>
					</div>

					<div class="clearfix"> </div>
											
					<div class="col-md-6 form-group1 group-mail">
						<label class="control-label">Email</label>
						<input type="email" class="form-control" name="ds_email" id="ds_email" required value="">
					</div>
					<div class="col-md-3 form-group1 group-mail">
						<label class="control-label">Telefone</label>
						<input type="text" class="form-control" name="num_telefone" id="num_telefone" required value="">
					</div>
					<div class="col-md-3 form-group1 group-mail">
						<label class="control-label">Whatsapp</label>
						<input type="text" class="form-control" name="num_celular" id="num_celular" value="">
					</div>
					
					<div class="clearfix"> </div>

					<div class="col-md-2 form-group1 group-mail">
						<label class="control-label">CEP</label>
						<input type="text" class="form-control" name="num_cep" id="num_cep" required value="">
					</div>
					<div class="col-md-8 form-group1 group-mail">
						<label class="control-label">Logradouro</label>
						<input type="text" class="form-control" name="ds_logradouro" id="ds_logradouro" required value="">
					</div>

					<div class="col-md-2 form-group1 group-mail">
						<label class="control-label">Nº</label>
						<input type="text" class="form-control" name="num_logradouro" id="num_logradouro" required value="">
					</div>

					<div class="clearfix"> </div>

					<div class="col-md-12 form-group1 group-mail">
						<label class="control-label">Complemento</label>
						<input type="text" class="form-control" name="ds_complemento" id="ds_complemento" value="">
					</div>

					<div class="clearfix"> </div>

					<div class="col-md-5 form-group1 group-mail">
						<label class="control-label">Bairro</label>
						<input type="text" class="form-control" name="ds_bairro" id="ds_bairro" required value="">
					</div>

					<div class="col-md-5 form-group1 group-mail">
						<label class="control-label">Cidade</label>
						<input type="text" class="form-control" name="ds_cidade" id="ds_cidade" required value="">
					</div>

					<div class="col-md-2 form-group1 group-mail">
						<label class="control-label">UF</label>
						<input type="text" class="form-control" name="ds_uf" id="ds_uf" required value="">
					</div>

					<div class="col-md-12 form-group1 ">
						<label class="control-label">Observação</label>
						<textarea name="ds_observacao" id="ds_observacao"></textarea>
					</div>
							
					<div class="col-md-12 form-group button-2">
						<button type="submit" class="btn btn-primary">Submit</button>
						<button type="reset" class="btn btn-default">Reset</button>
						<a href="{{ url('/cliente') }}">
							<button class="btn btn-red" type="button"><i class="fa fa-plus-circle"></i> Visualizar Cadastrados</button>
						</a>
					</div>
					<div class="clearfix"> </div>
				</form>
			</div>
		</div>
	</div> 
</div>

<script src="{{ asset('js/cliente.js') }}"></script>
<script type="text/javascript">
	function mascara(o,f){
		v_obj=o;
		v_fun=f;
		setTimeout("execmascara()",1);
	}
	function execmascara(){
		v_obj.value=v_fun(v_obj.value);
	}
	function mtel(v){
		v=v.replace(/\D/g,"");
		v=v.replace(/^(\d{2})(\d)/g,"($1) $2");
		v=v.replace(/(\d)(\d{4})$/,"$1-$2");
		return v;
	}
	function data(v){
		v=v.replace(/\D/g,"");
		v=v.replace(/(\d{2})(\d)/,"$1/$2");
		v=v.replace(/(\d{2})(\d)/,"$1/$2");    
		return v;
	}
	function id( el ){
		return document.getElementById( el );
	}
	window.onload = function(){
		id('num_telefone').onkeypress = function(){
			mascara( this, mtel );
		},
		id('num_celular').onkeypress = function(){
			mascara( this, mtel );
		}
	}
	</script>

@endsection