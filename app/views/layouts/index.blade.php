<!DOCTYPE html>
<html>
  <!-- Parcial de Header da estrutura -->
  @include('layouts.estrutura.header')
  <body class="skin-blue">
    <div class="wrapper">
      <!-- Parcial do Menu Superior da Aplicaçao -->
      @include('layouts.estrutura.menu-superior')
      <!-- Parcial de Menu Lateral -->
      @include('layouts.estrutura.menu-lateral')

      <!-- Content Wrapper. Contains page content -->
      @include('layouts.estrutura.conteudo')

      @include('layouts.estrutura.rodape')

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    {{ HTML::script('plugins/jQuery/jQuery-2.1.3.min.js') }}
    <!-- Bootstrap 3.3.2 JS -->
    {{ HTML::script('bootstrap/js/bootstrap.min.js') }}
    <!-- FastClick -->
    {{ HTML::script('plugins/fastclick/fastclick.min.js') }}
    <!-- AdminLTE App -->
    {{ HTML::script('dist/js/app.min.js') }}
    <!-- Sparkline -->
    {{ HTML::script('plugins/sparkline/jquery.sparkline.min.js') }}
    <!-- jvectormap -->
    {{ HTML::script('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}
    {{ HTML::script('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}
    <!-- daterangepicker -->
    {{ HTML::script('plugins/daterangepicker/daterangepicker.js') }}
    <!-- datepicker -->
    {{ HTML::script('plugins/datepicker/bootstrap-datepicker.js') }}
    <!-- iCheck -->
    {{ HTML::script('plugins/iCheck/icheck.min.js') }}
    <!-- SlimScroll 1.3.0 -->
    {{ HTML::script('plugins/slimScroll/jquery.slimscroll.min.js') }}
    <!-- ChartJS 1.0.1 -->
    {{ HTML::script('plugins/chartjs/Chart.min.js') }}

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {{ HTML::script('dist/js/pages/dashboard2.js') }}
    <!-- AdminLTE for demo purposes -->
    {{ HTML::script('dist/js/demo.js') }}
  </body>
</html>