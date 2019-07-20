<!DOCTYPE html>
<html lang="en">
<head>    
    @include('layouts.parts.htmlhead')
</head>

<body class="login-container">

	<!-- Main navbar -->
	<div class="navbar navbar-default navbar-inverse bg-orange-400">

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav navbar-right">
				<li>
					@if (Route::has('register'))
						<a href="{{ route('register') }}">Register</a>
					@endif
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">
			<!-- Main content -->
			<div class="content-wrapper">
				<!-- Content area -->
                <div class="content">
                    @yield('content')

                    <!-- Footer -->
                    @include('layouts.parts.footer')
                    <!-- /footer -->
                </div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>