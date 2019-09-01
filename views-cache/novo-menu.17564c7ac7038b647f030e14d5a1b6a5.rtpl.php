<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Lista de menus do site
        </h1>
        <ol class="breadcrumb">
            <li><a href="/Projetosite/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/Projetosite/admin/menus">Menus</a></li>
            <li class="active"><a href="/admin/menus/novo-menu">Cadastrar</a></li>
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
                    <form role="form" action="/projetosite/admin/novo-menu" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="nome">Link</label>
                                <input type="text" class="form-control" id="nome" name="link"
                                       placeholder="Digite o link do menu">
                            </div>
                            <div class="form-group">
                                <label for="login">Descrição</label>
                                <input type="text" class="form-control" id="login" name="descricao"
                                       placeholder="Digite a descrição">
                            </div>
                          
                        </div>

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