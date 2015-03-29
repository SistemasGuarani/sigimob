<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MENU DE NAVEGAÇÃO</li>
      <li class="active treeview">
        <a href="{{action('IndexController@index')}}">
          <i class="fa fa-dashboard"></i> <span>Inicio</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-home"></i>
          <span>Imoveis</span>
        </a>
      </li>
      <li class="treeview">
        <a href="{{action('UserController@index')}}">
          <i class="fa fa-users"></i>
          <span>Usuários</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>