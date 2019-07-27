<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Pelayanan BPN</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta content="" name="description"/>
	<meta content="WarunkWeb" name="author"/>
  
    @include('layouts.partsfront.css')

	<link rel="shortcut icon" href="favicon.ico"/>
</head>

<body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-fullscreen">
    <!-- BEGIN: PAGE CONTAINER -->
    <div class="c-layout-page">
        @yield('content')	
    </div>
    <!-- END: PAGE CONTAINER -->

    @include('layouts.partsfront.footer')
    <!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
    <div class="c-layout-go2top">
        <i class="icon-arrow-up"></i>
    </div>
    <!-- END: LAYOUT/FOOTERS/GO2TOP -->
    
    @include('layouts.partsfront.js')
</body>
</html>