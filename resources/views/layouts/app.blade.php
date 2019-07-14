<!DOCTYPE html>
<html lang="en">
<head>    
    @include('layouts.parts.htmlhead')
</head>

<body>

	<!-- Main navbar -->
	@include('layouts.parts.navbar')
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

            <!-- Main sidebar -->
            @include('layouts.parts.sidebar')
			<!-- /main sidebar -->

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4>
								<i class="icon-arrow-left52 position-left"></i> 
								<span class="text-semibold">@yield('page-title')</span>
							</h4>
						</div>

						<div class="heading-elements">
							<ul class="breadcrumb heading-text breadcrumb-arrows">
								<li><a href="{{ route('check-dashboard') }}"><i class="icon-home2"></i></a></li>
								@yield('breadcrumb')
								<li class="active">@yield('page-title')</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /page header -->


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