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
                    <form role="form" action="/projetosite/admin/usuarios/novo-usuario" method="post">
                        <div class="box-body">


                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Example select</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <?php $counter1=-1;  if( isset($pacientes) && ( is_array($pacientes) || $pacientes instanceof Traversable ) && sizeof($pacientes) ) foreach( $pacientes as $key1 => $value1 ){ $counter1++; ?>

                                    <option><?php echo htmlspecialchars( $value1["NomePaciente"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>

                                    <?php } ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Example multiple select</label>
                                <?php $counter1=-1;  if( isset($dentistas) && ( is_array($dentistas) || $dentistas instanceof Traversable ) && sizeof($dentistas) ) foreach( $dentistas as $key1 => $value1 ){ $counter1++; ?>

                                <select multiple class="form-control" id="exampleFormControlSelect2">

                                    <option><?php echo htmlspecialchars( $value1["NomeDentista"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>


                                </select>
                                <?php } ?>

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                    </form
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