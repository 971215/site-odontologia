<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Lista de Usuários
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/admin/Usuario">Usuários</a></li>
            <li class="active"><a href="/admin/usuarios/novo">Cadastrar</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Novo Usuário</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="/projetosite/admin/pacientes/novo-paciente" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome"
                                       placeholder="Digite o nome">
                            </div>
                            <div class="form-group">
                                <label for="rg">RG</label>
                                <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="11"  class="form-control" id="rg" name="rg"
                                       placeholder="Digite o RG">
                            </div>
                            
                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="11" class="form-control" id="cpf" name="cpf"
                                       placeholder="Digite o CPF">
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereco</label>
                                <input type="text" class="form-control" id="endereco" name="endereco"
                                       placeholder="Digite o Endereco">
                            </div>
                            
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control" id="telefone" name="telefone"
                                       placeholder="Digite o Telefone">
                            </div>
                            <div class="form-group">
                                <label for="dtnascimento">Data de nascimento</label>
                                <input type="date" class="form-control" id="dtnascimento" name="dtnascimento"
                                       placeholder="Digite a data de nascimento">
                            
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
                </form>
            </div>
        </div>
</div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->