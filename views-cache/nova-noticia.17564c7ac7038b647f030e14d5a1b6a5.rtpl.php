<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Lista de Usuários
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/admin/users">Usuários</a></li>
            <li class="active"><a href="/admin/users/create">Cadastrar</a></li>
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
                    <form enctype="multipart/form-data" role="form" action="/projetosite/admin/noticias/nova-noticia" method="post">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="nome">Título</label>
                                <input type="text" class="form-control" id="nome" name="titulo"
                                       placeholder="Digite o Título da notícia">
                            </div>


                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Corpo</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"  name="corpo" placeholder="Digite o Conteúdo da notícia"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Escolha uma imagem</label>
                                <input type="file" class="form-control-file" name="imagem">
                            </div>



                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button  type="submit" class="btn btn-success">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->