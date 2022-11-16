<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- theme meta -->
    <meta name="theme-name" content="quixlab" />

    <title>Admin Dashboard PPID</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('backend/images/favicon.png')}}">
    <!-- Pignose Calender -->
    <link href="{{asset('backend/./plugins/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{asset('backend/./plugins/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}">
    <!-- Custom Stylesheet -->
    <link href="{{asset('vendorss/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('assets_admin/library/summernote/dist/summernote-bs4.css') }}">
    <link href="{{asset('backend/./plugins/summernote/dist/summernote.css')}}" rel="stylesheet">

</head>

<body>

  <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{asset('backend/plugins/common/common.min.js')}}"></script>
    <script src="{{asset('backend/js/custom.min.js')}}"></script>
    <script src="{{asset('backend/js/settings.js')}}"></script>
    <script src="{{asset('backend/js/gleek.js')}}"></script>
    <script src="{{asset('backend/js/styleSwitcher.js')}}"></script>

    <!-- Datatables -->
    <script src="{{asset('vendorss/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendorss/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <script src="{{asset('backend/./plugins/summernote/dist/summernote.min.js')}}"></script>
    <script src="{{asset('backend/./plugins/summernote/dist/summernote-init.js')}}"></script>

    <!-- Chartjs -->
    <script src="{{asset('backend/./plugins/chart.js/Chart.bundle.min.js')}}"></script>
    <!-- Circle progress -->
    <script src="{{asset('backend/./plugins/circle-progress/circle-progress.min.js')}}"></script>
    <!-- Datamap -->
    <script src="{{asset('backend/./plugins/d3v3/index.js')}}"></script>
    <script src="{{asset('backend/./plugins/topojson/topojson.min.js')}}"></script>
    <script src="{{asset('backend/./plugins/datamaps/datamaps.world.min.js')}}"></script>
    <!-- Morrisjs -->
    <script src="{{asset('backend/./plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('backend/./plugins/morris/morris.min.js')}}"></script>
    <!-- Pignose Calender -->
    <script src="{{asset('backend/./plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('backend/./plugins/pg-calendar/js/pignose.calendar.min.js')}}"></script>
    <!-- ChartistJS -->
    <script src="{{asset('backend/./plugins/chartist/js/chartist.min.js')}}"></script>
    <script src="{{asset('backend/./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}"></script>

    <script src="{{asset('backend/./js/dashboard/dashboard-1.js')}}"></script>

    <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable
      $('#dataTableHover1').DataTable(); // ID From dataTable with Hover
    });
  </script>

</body>

</html>
