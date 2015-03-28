<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      @yield('titulo')
    </h1>
    <ol class="breadcrumb">
      @include('layouts.acoes.novo')
    </ol>
  </section>

  <!-- Conteudo da DIV central -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
             @yield('conteudo')
          </div><!-- /.box-header -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->    
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->