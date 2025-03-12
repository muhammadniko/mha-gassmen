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

  <body>
    

        <!-- page content -->
        @yield('content')
        <!-- /page content -->

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
