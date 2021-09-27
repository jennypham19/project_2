<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{ asset('assets1') }}/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Quản lý điểm - @yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('assets1') }}/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Dashboard core CSS    -->
    <link href="{{ asset('assets1') }}/css/light-bootstrap-dashboard.css?v=1.4.1" rel="stylesheet" />

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('assets1') }}/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('assets1') }}/css/pe-icon-7-stroke.css" rel="stylesheet" />

    <!--     Calendar     -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!--fullcalendar plugin files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    
    <!-- for plugin notification -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>

<body>

    <div class="wrapper">
        @include('layout-user.sidebar-user')
        <div class="main-panel">
            @include('layout-user.nav-user')

            <div class="main-content">
                <div class="container-fluid">
                    @yield('content-user')
                </div>
            </div>
            @include('layout-user.footer')

        </div>
    </div>


</body>
<!--   Core JS Files  -->
<script src="{{ asset('assets1') }}/js/jquery.min.js" type="text/javascript"></script>
<script src="{{ asset('assets1') }}/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{ asset('assets1') }}/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>


<!--  Forms Validations Plugin -->
<script src="{{ asset('assets1') }}/js/jquery.validate.min.js"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{ asset('assets1') }}/js/moment.min.js"></script>

<!--  Date Time Picker Plugin is included in this js file -->
<script src="{{ asset('assets1') }}/js/bootstrap-datetimepicker.min.js"></script>

<!--  Select Picker Plugin -->
<script src="{{ asset('assets1') }}/js/bootstrap-selectpicker.js"></script>

<!--  Checkbox, Radio, Switch and Tags Input Plugins -->
<script src="{{ asset('assets1') }}/js/bootstrap-switch-tags.min.js"></script>

<!--  Charts Plugin -->
<script src="{{ asset('assets1') }}/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="{{ asset('assets1') }}/js/bootstrap-notify.js"></script>

<!-- Sweet Alert 2 plugin -->
<script src="{{ asset('assets1') }}/js/sweetalert2.js"></script>

<!-- Vector Map plugin -->
<script src="{{ asset('assets1') }}/js/jquery-jvectormap.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Wizard Plugin    -->
<script src="{{ asset('assets1') }}/js/jquery.bootstrap.wizard.min.js"></script>

<!--  Bootstrap Table Plugin    -->
<script src="{{ asset('assets1') }}/js/bootstrap-table.js"></script>

<!--  Plugin for DataTables.net  -->
<script src="{{ asset('assets1') }}/js/jquery.datatables.js"></script>


<!--  Full Calendar Plugin    -->
<script src="{{ asset('assets1') }}/js/fullcalendar.min.js"></script>

<!-- Light Bootstrap Dashboard Core javascript and methods -->
<script src="{{ asset('assets1') }}/js/light-bootstrap-dashboard.js?v=1.4.1"></script>

<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('assets1') }}/js/demo.js"></script>
{{-- <script type="text/javascript">
    $(document).ready(function() {

        demo.initDashboardPageCharts();
        demo.initVectorMap();

        $.notify({
            icon: 'pe-7s-bell',
            message: "<b>Light Bootstrap Dashboard PRO</b> - forget about boring dashboards."

        }, {
            type: 'warning',
            timer: 4000
        });

    });
</script> --}}

</html>
