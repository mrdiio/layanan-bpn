<!DOCTYPE html>
<html lang="en">
<head>    
    @include('layouts.parts.htmlhead')
</head>

<body class="login-container login-cover" style="background-image: url(images/login_cover.jpg); no-repeat;">

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">
			<!-- Main content -->
			<div class="content-wrapper">
				<!-- Content area -->
                <div class="content pb-20">
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