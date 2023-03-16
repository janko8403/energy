<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="">

		<!-- CSRF Token -->
    	<meta name="csrf-token" content="{{ csrf_token() }}">

		<meta name="author" content="">
		<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
		<title>{{ config('app.name', 'Laravel') }}</title>
        
        <link href="{{ asset('admin/lib/material-design-icons/css/material-design-iconic-font.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('admin/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('admin/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
        <link href="{{ asset('admin/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet">
        
	</head>
	<body>

        <div class="be-wrapper be-fixed-sidebar">

            @include('admin.components.nav_top')
            @include('admin.components.left_sidebar')
            
            <div class="be-content">
                <div class="main-content container-fluid">
                    <main>
                        @yield('content')
                    </main>
                </div>
            </div>
            
        </div>
        

        <script src="{{ asset('admin/lib/jquery/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/js/app.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
        
        <script type="text/javascript">
        $(document).ready(function(){
            App.init();
            //App.ChartJs();
        });
        </script>
        @stack('custom-scripts')

	</body>
</html>