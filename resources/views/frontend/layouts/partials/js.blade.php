
	<!-- JS -->
	<script src="{{ asset('frontend/assets/js/jquery-2.2.3.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/masonry.pkgd.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/underscore-min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/moment-2.8.3.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/clndr.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/select2.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/jquery.dotdotdot.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/jquery.countTo.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/jquery.easypiechart.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/parsley.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/pace.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/app.min.js') }}"></script>

	<!-- Calendar events -->
	<script>
		Calendar.events = [
			{ date: moment().format(new Date().getFullYear() + '-03-07'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-03-08'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-04-09'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-04-23'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-04-10'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-05-14'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-05-19'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-05-28'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-06-04'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-06-09'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-06-14'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-07-17'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-07-21'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-07-26'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-08-28'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-08-04'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-08-09'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-08-14'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-09-17'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-09-21'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-09-26'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-10-28'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-10-04'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-10-09'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-10-14'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-11-17'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-11-21'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-11-26'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-11-28'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-12-04'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-12-09'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-12-14'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-01-17'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-01-21'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-02-26'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-02-28'), url: '#' },
		];
	</script>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-80760662-1', 'auto');
		ga('send', 'pageview');
	</script>

	<!-- Demo -->
	<script>
		$('[data-current-year]').each(function() {
			$(this).text(new Date().getFullYear());
		});
	</script>