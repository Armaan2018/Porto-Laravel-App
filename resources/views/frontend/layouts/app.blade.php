<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Blogee</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="favicon.ico">


	@include('frontend.layouts.partials.css')
	

</head>
<body>

{{-- <div class="page-preloader">
	<div class="content">
		<img src="frontend/img/logo.png" alt="#" width="170" height="88" class="img-responsive">

		<div class="loading">Loading</div>
	</div>
</div> --}}
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<!-- Facebook -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
	
	<div class="pageWrap">
		<!-- Header -->
          @include('frontend.layouts.header')
		
		<!-- Main carousel -->
         @include('frontend.layouts.post-carousel')




		<!-- Content -->
		<div class="container">
			<div class="row">
				<!-- Listings -->


         @include('frontend.layouts.different-posts')



				<!-- Aside -->

          @include('frontend.layouts.sidebar')


			</div>
		</div>


       @include('frontend.layouts.social-pinboard')


        @include('frontend.layouts.footer')
	</div>

	<!-- Search modal -->
{{-- 	<div class="modal fade in" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<form>
						<div class="c">
							<input type="text" class="input" placeholder="Type search term...">
							<button class="btn btn-color-full" type="submit"><span>Search</span></button>
						</div>

						<a href="#" title="#" class="advanced js-advanced-search"><span>Advanced search</span></a>

						<div class="c advancedWrap container-fluid">
							<div class="row">
								<div class="col-sm-12 col-md-6 i">
									<select class="js-select">
										<option>Choose Category</option>
										<option>Creative</option>
										<option>Fashion</option>
										<option>Architecture</option>
										<option>Music</option>
										<option>Nature</option>
										<option>Lifestyle</option>
										<option>Craft</option>
									</select>
								</div>
								<div class="col-sm-6 col-md-3 i">
									<select class="js-select">
										<option>Month</option>
										<option>February</option>
										<option>March</option>
										<option>April</option>
										<option>May</option>
										<option>June</option>
										<option>July</option>
										<option>August</option>
										<option>September</option>
										<option>October</option>
										<option>November</option>
										<option>December</option>
									</select>
								</div>
								<div class="col-sm-6 col-md-3 i">
									<select class="js-select">
										<option>Year</option>
										<option>2015</option>
										<option>2014</option>
										<option>2013</option>
										<option>2012</option>
										<option>2011</option>
									</select>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div> --}}


@include('frontend.layouts.partials.js')





</body>
</html>
