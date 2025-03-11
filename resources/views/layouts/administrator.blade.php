<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{ asset("/vendors/bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset("/vendors/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset("/vendors/iCheck/skins/flat/green.css") }}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{ asset("/vendors/select2/dist/css/select2.min.css") }}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{ asset("/vendors/switchery/dist/switchery.min.css") }}" rel="stylesheet">
    <!-- starrr -->
    <link href="{{ asset("/vendors/starrr/dist/starrr.css") }}" rel="stylesheet">
        <!-- Datatables -->
        <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset("/assets/css/custom.min.css") }}" rel="stylesheet">
    <style>
      .site_title {
        font-weight: bold;
        font-size: 14px;
      }
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><span>GA - ASSET MANAGEMENT</span></a>
            </div>

            <div class="clearfix"></div>

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Dashboard</a></li>
                  <li><a><i class="fa fa-table"></i> Assets <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('asset/')}}">Semua Asset</a></li>
                      <li><a href="{{url('asset/new')}}">Tambah Asset</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                      <li><a href="fixed_footer.html">Fixed Footer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset("/images/user.png") }}" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset("/vendors/jquery/dist/jquery.min.js") }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset("/vendors/bootstrap/dist/js/bootstrap.min.js") }}"></script>
    <!-- FastClick -->
    <script src="{{ asset("/vendors/fastclick/lib/fastclick.js") }}"></script>
    <!-- iCheck -->
    <script src="{{ asset("/vendors/iCheck/icheck.min.js") }}"></script>
     <!-- Datatables -->
     <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <!-- Select2 -->
    <script src="{{ asset("/vendors/select2/dist/js/select2.full.min.js") }}"></script>
    <!-- Parsley -->
    <script src="{{ asset("/vendors/parsleyjs/dist/parsley.min.js") }}"></script>
    <!-- Autosize -->
    <script src="{{ asset("/vendors/autosize/dist/autosize.min.js") }}"></script>
    <!-- jQuery autocomplete -->
    <script src="{{ asset("/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js") }}"></script>
    <!-- starrr -->
    <script src="{{ asset("/vendors/starrr/dist/starrr.js") }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset("/assets/js/custom.min.js") }}"></script>
	
  </body>
</html>
