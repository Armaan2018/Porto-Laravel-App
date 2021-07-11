				<aside class="col-xs-12 col-sm-4 aside">
					<div class="row">

						<!-- Post slider -->
						<div class="col-xs-12 i">
							<div class="box postSlider">
								<h2>Gallery</h2>
								
								<div class="asideCarousel js-aside-carousel">

@foreach ($data as $gallery)

                                    @php
                                    	$featured = json_decode($gallery -> featured)
                                    @endphp

                                    @if ($featured -> format == 'gallery')
                                   
                                   @foreach ($featured -> gallery as $gl)
                                   	{{-- expr --}}
         
									<div class="i">
										<div class="c">
											<article class="article">



												<a href="post-detail-standard.html" title="#" class="image">
													<img src="{{URL::to('/')}}/media/post/{{$gl}}" alt="#" width="290" height="193" class="img-responsive">
												</a>

											</article>
										</div>
									</div>
									                          @endforeach
									 @endif




@endforeach
								</div>
							</div>
						</div>





						<!-- Our authors -->						
						<div class="col-xs-12 i">
							<div class="box ourAuthorsBox">
								<h2>Our Authors</h2>

								<div class="c">
									<div>
										<div class="i">
											<div class="imageWrap">
												<img src="tmp/190x190-2.jpg" alt="#" width="190" height="190" class="img-responsive image">
											</div>
											<div class="name">Jane Doe</div>
											<p class="info">Food specialist, recipe nerd and I love to cook.</p>
										</div>
										<!-- <div class="i">
											<div class="imageWrap">
												<img src="tmp/190x190-1.jpg" alt="#" width="190" height="190" class="img-responsive image">
											</div>
											<div class="name">Andrew Doe</div>
											<p class="info">Blog specialist, design nerd and I like muffins.</p>
										</div> -->
									</div>

									<div class="btns">
										<a href="page-about-us.html" title="#" class="btn"><span>Follow</span></a>
										<a href="page-about-us.html" title="#" class="btn btn-color-full"><span>Message</span></a>
									</div>
								</div>
							</div>
						</div>

						<!-- Ads -->
						<div class="col-xs-12 i">
							<div class="box ads">
								<a href="#" title="#">
									<img src="frontend/tmp/300x250-1.png" alt="#" width="300" height="250" class="img-responsive">
								</a>
							</div>
						</div>

						<!-- Most popular by -->

						<!-- Recent Comments -->
						<div class="col-xs-12 i">
							<div class="box commentsWrap">
								<h2>Recent Comments</h2>
								
								<div class="c">
									<div class="media i">
										<div class="media-left media-middle">
											<a href="#" title="#" class="image">
												<img src="frontend/tmp/60x60-1.jpg" alt="#" width="60" height="60" class="media-object">
											</a>
										</div>
										<div class="media-body">
											<div class="comment">
												<p><a href="#" title="#">@AndrewDoe</a> Suspendisse potenti morbi phare arcu vitae risus feret finibus...</p>
												<div class="info">
													<span>16 min ago</span>
												</div>
											</div>
										</div>
									</div>
									<div class="media i">
										<div class="media-left media-middle">
											<a href="#" title="#" class="image">
												<img src="frontend/tmp/60x60-2.jpg" alt="#" width="60" height="60" class="media-object">
											</a>
										</div>
										<div class="media-body">
											<div class="comment">
												<p><a href="#" title="#">@Themees</a> Vestibulum consect lacus odio, in ultrices magna...</p>
												<div class="info">
													<span>24 min ago</span>
												</div>
											</div>
										</div>
									</div>
									<div class="media i">
										<div class="media-left media-middle">
											<a href="#" title="#" class="image">
												<img src="frontend/tmp/60x60-1.jpg" alt="#" width="60" height="60" class="media-object">
											</a>
										</div>
										<div class="media-body">
											<div class="comment">
												<p><a href="#" title="#">@Anne</a> Duis ullamcorper pretium risus, in ultrices magna.</p>
												<div class="info">
													<span>29 min ago</span>
												</div>
											</div>
										</div>
									</div>
									<div class="media i">
										<div class="media-left media-middle">
											<a href="#" title="#" class="image">
												<img src="frontend/tmp/60x60-3.jpg" alt="#" width="60" height="60" class="media-object">
											</a>
										</div>
										<div class="media-body">
											<div class="comment">
												<p><a href="#" title="#">@John</a> Duis semper nibh egestas dolor, vestibulum gravida.</p>
												<div class="info">
													<span>44 min ago</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Categories -->
						<div class="col-xs-12 i">
							<div class="box categories">
								<h2>Categories</h2>
								
								<div class="c">
									@foreach ($category as $cat)

									
									<div class="i">
										<a href="page-category.html" title="#" class="clearfix">
											<span class="title">{{$cat -> name}}</span>
											<span class="count">(68)</span>
										</a>
									</div>
                                     @endforeach
								</div>

								<div class="btns text-center">
									<a href="page-category.html" title="#" class="btn"><span>All categories</span></a>
								</div>
							</div>
						</div>

						<!-- Subscribe -->
						<div class="col-xs-12 i">
							<div class="box subscribe signInOutWrap">
								<form data-parsley-validate>
									<input type="email" placeholder="Your Email Adress" class="input" required data-parsley-error-message="Please enter correct email address" data-parsley-errors-container=".error-newsletter">
									<button class="btn" type="submit"><span>Subscribe</span></button>

									<div class="error-newsletter"></div>
								</form>
							</div>
						</div>

						<!-- Archives -->
						<div class="col-xs-12 i">
							<div class="box archives">
								<h2>Archives</h2>
								
								<div class="c">
									<div class="i">
										<a href="#" title="#" class="clearfix">
											<span class="month">March 2015</span>
											<span class="count">(85)</span>
										</a>
									</div>
									<div class="i">
										<a href="#" title="#" class="clearfix">
											<span class="month">February 2015</span>
											<span class="count">(75)</span>
										</a>
									</div>
									<div class="i">
										<a href="#" title="#" class="clearfix">
											<span class="month">January 2015</span>
											<span class="count">(55)</span>
										</a>
									</div>
									<div class="i">
										<a href="#" title="#" class="clearfix">
											<span class="month">December 2014</span>
											<span class="count">(62)</span>
										</a>
									</div>
									<div class="i">
										<a href="#" title="#" class="clearfix">
											<span class="month">November 2014</span>
											<span class="count">(32)</span>
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Tags -->
						<div class="col-xs-12 i">
							<div class="box tags">
								<h2>Tags</h2>

								<div class="c">

									@foreach ($tag as $taging)
									<a href="#" title="#" class="btn btn-color"><span>#{{$taging -> name}}</span></a>
									@endforeach


									
								</div>
							</div>
						</div>


							
						<!-- Recent Posts -->
						<div class="col-xs-12 i">
							<div class="box articleMediaList">
								<h2>Recent posts</h2>
								
								<div class="articlesFilter clearfix js-tabs" role="tablist">
									<div class="i">
										<a href="#week" aria-controls="week" role="tab" data-toggle="tab" class="active">This week</a>
									</div>
									<div class="i text-center">
										<a href="#month" aria-controls="month" role="tab" data-toggle="tab">This month</a>
									</div>
									<div class="i text-right">
										<a href="#trending" aria-controls="trending" role="tab" data-toggle="tab">Treniding</a>
									</div>
								</div>
								
								<div class="tab-content bordered">
									<!-- This week -->
									<div role="tabpanel" class="tab-pane fade in active" id="week">
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="frontend/tmp/90x90-1.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Even Forest Powers Have Limits</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 26, <span data-current-year></span></a>
												</div>
											</div>
										</article>
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="frontend/tmp/90x90-2.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">There is something in the New York air that makes sleep useless.</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 25, <span data-current-year></span></a>
												</div>
											</div>
										</article>
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="frontend/tmp/90x90-3.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Checkin' out my new Fuji camera</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 25, <span data-current-year></span></a>
												</div>
											</div>
										</article>
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="frontend/tmp/90x90-1.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Even Forest Powers Have Limits</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 24, <span data-current-year></span></a>
												</div>
											</div>
										</article>
									</div>

									<!-- This month -->
									<div role="tabpanel" class="tab-pane fade" id="month">
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="frontend/tmp/90x90-3.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Checkin' out my new Fuji camera</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 25, <span data-current-year></span></a>
												</div>
											</div>
										</article>
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="frontend/tmp/90x90-2.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">There is something in the New York air that makes sleep useless.</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 25, <span data-current-year></span></a>
												</div>
											</div>
										</article>
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="frontend/tmp/90x90-1.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Even Forest Powers Have Limits</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 24, <span data-current-year></span></a>
												</div>
											</div>
										</article>
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="frontend/tmp/90x90-3.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Checkin' out my new Fuji camera</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 25, <span data-current-year></span></a>
												</div>
											</div>
										</article>
									</div>
									
									<!-- Trending -->
									<div role="tabpanel" class="tab-pane fade" id="trending">
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="frontend/tmp/90x90-2.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">There is something in the New York air that makes sleep useless.</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 25, <span data-current-year></span></a>
												</div>
											</div>
										</article>
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="frontend/tmp/90x90-1.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Even Forest Powers Have Limits</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 26, <span data-current-year></span></a>
												</div>
											</div>
										</article>
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="frontend/tmp/90x90-3.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Checkin' out my new Fuji camera</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 25, <span data-current-year></span></a>
												</div>
											</div>
										</article>
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="frontend/tmp/90x90-1.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Even Forest Powers Have Limits</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 24, <span data-current-year></span></a>
												</div>
											</div>
										</article>
									</div>
								</div>
							</div>
						</div>
					</div>
				</aside>