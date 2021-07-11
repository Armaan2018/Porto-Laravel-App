		<div class="socialPinboard container-fluid">
			<div class="row">
				<div class="col-xs-6 col-sm-4 col-lg-15 items">
					<div class="row">
						@foreach ($data as $social)

						@php
							$featured = json_decode($social -> featured)
						@endphp

						@if ($featured -> format == 'image')
							
						
						<div class="col-xs-6 i">
							<a href="post-detail-standard.html" title="#">
								<img src="{{URL::to('/')}}/media/post/{{ $featured -> image}}" alt="#" width="185" height="185" class="img-responsive">
							</a>
						</div>

						@endif
@endforeach
					</div>
				</div>
				<div class="col-xs-6 col-sm-4 col-lg-15 items">
					<div class="row">
						<div class="col-xs-6 i">
							<a href="post-detail-standard.html" title="#">
								<img src="frontend/tmp/185x185-5.jpg" alt="#" width="185" height="185" class="img-responsive">
							</a>
						</div>
						<div class="col-xs-6 i">
							<a href="post-detail-standard.html" title="#">
								<img src="frontend/tmp/185x185-6.jpg" alt="#" width="185" height="185" class="img-responsive">
							</a>
						</div>
						<div class="col-xs-12 i">
							<a href="post-detail-standard.html" title="#">
								<img src="frontend/img/transparent.png" alt="#" width="382" height="185" class="img-responsive">

								<div class="c gray">
									<div class="name">@AndrewDoe</div>
									<p class="js-shortener" data-maxheight="45">Mauris et interdum ex. Quisque semper nibh et odio sagittis imperdiet sed metus.</p>
									<div class="info">16 min ago</div>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-4 col-lg-15 items hidden-xs">
					<div class="row">
						<div class="col-xs-12 i">
							<a href="post-detail-standard.html" title="#">
								<img src="frontend/img/bg_pinboard_twitter.png" alt="#" width="382" height="185" class="img-responsive">

								<div class="c">
									<div class="name">@AndrewDoe</div>
									<p class="js-shortener" data-maxheight="45">Mauris et interdum ex. Quisque semper nibh et odio sagittis imperdiet sed metus.</p>
									<div class="info">16 min ago</div>
								</div>
							</a>
						</div>
						<div class="col-xs-6 i">
							<a href="post-detail-standard.html" title="#">
								<img src="frontend/tmp/185x185-7.jpg" alt="#" width="185" height="185" class="img-responsive">
							</a>
						</div>
						<div class="col-xs-6 i">
							<a href="post-detail-standard.html" title="#">
								<img src="frontend/tmp/185x185-8.jpg" alt="#" width="185" height="185" class="img-responsive">
							</a>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-4 col-lg-15 items visible-lg">
					<div class="row">
						<div class="col-xs-6 i">
							<a href="post-detail-standard.html" title="#">
								<img src="frontend/tmp/185x185-9.jpg" alt="#" width="185" height="185" class="img-responsive">
							</a>
						</div>
						<div class="col-xs-6 i">
							<a href="post-detail-standard.html" title="#">
								<img src="frontend/tmp/185x185-10.jpg" alt="#" width="185" height="185" class="img-responsive">
							</a>
						</div>
						<div class="col-xs-6 i">
							<a href="post-detail-standard.html" title="#">
								<img src="frontend/tmp/185x185-11.jpg" alt="#" width="185" height="185" class="img-responsive">
							</a>
						</div>
						<div class="col-xs-6 i">
							<a href="post-detail-standard.html" title="#">
								<img src="frontend/tmp/185x185-12.jpg" alt="#" width="185" height="185" class="img-responsive">
							</a>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-4 col-lg-15 items visible-lg">
					<div class="row">
						<div class="col-xs-6 i">
							<a href="post-detail-standard.html" title="#">
								<img src="frontend/tmp/185x185-13.jpg" alt="#" width="185" height="185" class="img-responsive">
							</a>
						</div>
						<div class="col-xs-6 i">
							<a href="post-detail-standard.html" title="#">
								<img src="frontend/tmp/185x185-14.jpg" alt="#" width="185" height="185" class="img-responsive">
							</a>
						</div>
						<div class="col-xs-12 i">
							<a href="post-detail-standard.html" title="#">
								<img src="frontend/img/transparent.png" alt="#" width="382" height="185" class="img-responsive">

								<div class="c gray">
									<div class="name">@AndrewDoe</div>
									<p class="js-shortener" data-maxheight="45">Mauris et interdum ex. Quisque semper nibh et odio sagittis imperdiet sed metus.</p>
									<div class="info">16 min ago</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>