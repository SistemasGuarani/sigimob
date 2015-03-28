<header class="main-header">
  <!-- Logo -->
  <a href="http://sistemasguarani.esy.es" class="logo"><b>SIGIMOB</b></a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <div class="pull-right">
            <a href="{{action('LoginController@login')}}" class="btn btn-default btn-flat">Sair</a>
          </div>                
        </li>
      </ul>
    </div>
  </nav>
</header>