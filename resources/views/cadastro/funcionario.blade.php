@extends('layouts.app')

@section('content')

<div class="content-wrapper" style=' height:850px'>
	<div class="row">
		<div class="col-lg-12 heading">
            <h1 class="page-header"><i class="ec-pencil2"></i>Adicionar Funcionário</h1>
            
        </div>
	</div>
	
	<?php if(!empty($this->msg)):?>
		<?php if($this->msg == 2) :?>
			<div class="alert alert-success fade in">
				<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
				<i class="fa-ok alert-icon s24"></i>
				<strong>Registro gravado com sucesso!</strong>
			</div>
		<?php else :?>
			<div class="alert alert-danger fade in">
				<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
				<strong>Ocorreu um erro ao gravar!</strong>
			</div>
		<?php endif;?>
	<?php endif;?>
	
	<form id="formCadastro" class="form-horizontal group-border hover-stripped" role="form" method="post" action="">
		<div class="row">
			<div class="col-lg-12">	
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="panel panel-default plain">
						<div class="panel-heading white-bg">DADOS GERAIS</div>
						<div class="panel-body">
							<div class="form-group">
								<label class="col-lg-1 col-md-1 col-sm-12 control-label">Registro: </label>
								<div class="col-lg-2 col-md-2">
									<input class="form-control left-icon" type="text" id="id_entidade" name="id_entidade" readonly="readonly" value="" />
								</div>
								<label class="col-lg-1 col-md-1 col-sm-12 control-label">Cadastrado: </label>
								<div class="col-lg-2 col-md-2">
									<input class="form-control left-icon" type="text" id="dt_cadastro" name="dt_cadastro" readonly="readonly" value="" />
								</div>
                                <label class="col-lg-1 col-md-1 col-sm-12 control-label">Situação: </label>
								<div class="col-lg-2 col-md-2">
									<select class="form-control" id="situacao">
										<option>ATIVO</option>
										<option>INATIVO</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-1 col-md-1 col-sm-12 control-label ">Nome:</label>
								<div class="col-lg-4 col-md-4">
									<input type="text" class="form-control left-icon" autofocus="autofocus" id="st_nome" name="st_nome" required  value="" />
								</div>
								<label class="col-lg-1 col-md-1 col-sm-12 control-label">CPF:</label>
								<div class="col-lg-2 col-md-2">
									<input type="text" class="form-control left-icon" id="st_cpf" name="st_cpf" value="" />
								</div>
								<label class="col-lg-1 col-md-1 col-sm-12 control-label">Email:</label>
								<div class="col-lg-3 col-md-3">
									<input type="email" class="form-control left-icon" id="st_email" name="st_email" value="" />
								</div>
							</div>							
							<div class="form-group">
								<label class="col-lg-1 col-md-1 col-sm-12 control-label">RG:</label>
								<div class="col-lg-2 col-md-2">
									<input type="text" class="form-control left-icon" id="st_fonecontato" name="st_fonecontato" required value="" />
								</div>
								<label class="col-lg-1 col-md-1 col-sm-12 control-label">Dt Nasc:</label>
								<div class="col-lg-2 col-md-2">
									<input type="text" class="form-control left-icon" id="dt_nascimento" name="dt_nascimento" required value="" />
								</div>
								<label class="col-lg-1 col-md-1 col-sm-12 control-label">Telefone</label>
								<div class="col-lg-2 col-md-2">
									<input type="text" class="form-control left-icon" id="st_fonecontato" name="st_fonecontato" required value="" />
								</div>
								<label class="col-lg-1 col-md-1 col-sm-12 control-label">Celular:</label>
								<div class="col-lg-2 col-md-2">
									<input type="text" class="form-control left-icon" id="st_fonecontato" name="st_fonecontato" required value="" />
								</div>
							</div>
                            <div class="form-group">
								<label class="col-lg-1 col-md-1 col-sm-12 control-label">CNH:</label>
								<div class="col-lg-2 col-md-2">
									<input type="text" class="form-control left-icon" id="st_fonecontato" name="st_fonecontato" required value="" />
								</div>
								<label class="col-lg-1 col-md-1 col-sm-12 control-label">CTPS:</label>
								<div class="col-lg-2 col-md-2">
									<input type="text" class="form-control left-icon" id="dt_nascimento" name="dt_nascimento" required value="" />
								</div>
                                <label class="col-lg-1 col-md-1 col-sm-12 control-label">Série:</label>
								<div class="col-lg-1 col-md-1">
									<input type="text" class="form-control left-icon" id="dt_nascimento" name="dt_nascimento" required value="" />
								</div>
                                <label class="col-lg-1 col-md-1 col-sm-12 control-label">Expedição:</label>
                                <div class="col-lg-1 col-md-1">
									<input type="text" class="form-control left-icon" id="dt_nascimento" name="dt_nascimento" required value="" />
								</div>
                                <label class="col-lg-1 col-md-1 col-sm-12 control-label">UF:</label>
                                <div class="col-lg-1 col-md-1">
									<input type="text" class="form-control left-icon" id="dt_nascimento" name="dt_nascimento" required value="" />
								</div>
                            </div>
                            <div class="form-group">
								<label class="col-lg-1 col-md-1 col-sm-12 control-label">ESTADO CIVIL</label>
								<div class="col-lg-2 col-md-2">
                                    <select class="form-control" id="situacao">
                                        <option>Selecione</option>
										<option>CASADO (A)</option>
										<option>SOLTEIRO (A)</option>
                                        <option>SEPARADO (A)</option>
                                        <option>DIVORCIADO (A)</option>
									</select>
								</div>
								<label class="col-lg-1 col-md-1 col-sm-12 control-label">CÔNJUGE:</label>
								<div class="col-lg-4 col-md-4">
									<input type="text" class="form-control left-icon" id="st_fonecontato" name="st_fonecontato" required value="" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-1 col-md-1 col-sm-12 control-label">CEP </label>
								<div class="col-lg-2 col-md-2">
									<input type="text" class="form-control left-icon" id="st_cep" name="st_cep" value="" />
								</div>
								<label class="col-lg-1 col-md-1 col-sm-12 control-label">Tipo </label>
								<div class="col-lg-2 col-md-2">
									<input type="text" class="form-control" id="st_tipo_logradouro" name="st_tipo_logradouro" value="" />
								</div>
								
								<label class="col-lg-1 col-md-1 col-sm-12 control-label">UF</label>
								<div class="col-lg-2 col-md-2">
									<input type="text" class="form-control" id="st_estado" name="st_estado" value="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-1 col-md-1 col-sm-12 control-label">Logradouro</label>
								<div class="col-lg-5 col-md-5">
									<input type="text" class="form-control" id="st_logradouro" name="st_logradouro" value="">
								</div>
								<label class="col-lg-1 col-md-1 col-sm-12 control-label">Complemento</label>
								<div class="col-lg-5 col-md-5">
									<input type="text" class="form-control" id="st_complemento" name="st_complemento" value="">
								</div>
							</div>
							<div class="form-group">	
								<label class="col-lg-1 col-md-1 col-sm-12 control-label">Numero</label>
								<div class="col-lg-1 col-md-1">
									<input type="text" class="form-control" id="st_numero" name="st_numero" value="">
								</div>
								<label class="col-lg-1 col-md-1 col-sm-12 control-label">Bairro</label>
								<div class="col-lg-4 col-md-4">
									<input type="text" class="form-control" id="st_bairro" name="st_bairro" value="">
								</div>
								
								<label class="col-lg-1 col-md-2 col-sm-12 control-label">Cidade</label>
								<div class="col-lg-4 col-md-4">
									<input type="text" class="form-control" id="st_cidade" name="st_cidade" value="">
								</div>
							</div>	
                            <ul class="breadcrumb" style="text-align: center;">
                                <li>
                                <div class="form-group">	
                                    <label class="col-lg-1 col-md-1 col-sm-12 control-label">BANCO</label>
                                    <div class="col-lg-3 col-md-3">
                                        <input type="text" class="form-control" id="st_numero" name="st_numero" value="">
                                    </div>
                                    <label class="col-lg-1 col-md-1 col-sm-12 control-label">AGÊNCIA</label>
                                    <div class="col-lg-3 col-md-3">
                                        <input type="text" class="form-control" id="st_bairro" name="st_bairro" value="">
                                    </div>
                                    <label class="col-lg-1 col-md-2 col-sm-12 control-label">CONTA</label>
                                    <div class="col-lg-3 col-md-3">
                                        <input type="text" class="form-control" id="st_cidade" name="st_cidade" value="">
                                    </div>
                                </div>	
                                </li>
                            </ul>
                            <div class="panel panel-default plain">
						        <div class="panel-heading white-bg">BENEFICIÁRIOS E DEPENDENTES</div>
						        <div class="panel-body">

                                
                                </div>
                            </div>		
							<ul class="breadcrumb" style="text-align: center;">
								<li>
									<button class="btn btn-success  ml15" type="submit">Salvar</button>
									<button class="btn btn-primary" type="reset" id="btnLimpar">Limpar</button>
								</li>
							</ul>										
						</div>
					</div>
				</div>								
			</div>
		</div>
	</form>		
</div>

@endsection


