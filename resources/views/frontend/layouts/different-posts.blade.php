				<div class="col-xs-12 col-sm-8">
					<div class="articlesListing">

						<!-- Standard post -->
						<article class="article">
							<div class="image">
								<a href="post-detail-standard.html" title="#" class="favs">
									<i class="fa fa-heart"></i>
									<div class="count">36</div>
								</a>
								<a href="post-detail-standard.html" title="#">
									<img src="frontend/tmp/770x513-39.jpg" alt="#" width="770" height="513" class="img-responsive">
								</a>
							</div>
							<div class="box">
								<h3 class="title">
									<a href="post-detail-standard.html" title="#">Mauris accumsan eleifend magna</a>
								</h3>
								<div class="info">
									<div>
										<span class="date">March 26, <span data-current-year></span></span>
									</div>
									<div>by <a href="post-detail-standard.html" title="#">Themees</a></div>
									<div>in <a href="post-detail-standard.html" title="#">Nature</a></div>
									<div>3 min read</div>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris accumsan eleifend magna. Curabitur scelerisque vitae augue ac dignissim.
									Aliquam erat volutpat. Proin in ultricies ligula. Etiam rutrum porta lacus in posuere. vel tortor tempor risus ultricies bibendum...
								</p>
								<div class="btns text-center">
									<a href="post-detail-standard.html" title="#" class="btn btn-primary"><span>Continue reading</span></a>
								</div>

								<footer class="footer">
									<div class="row">
										<div class="col-sm-12 col-lg-6 tags">
											<a href="post-detail-standard.html" title="#">#Nature</a>
											<a href="post-detail-standard.html" title="#">#Forest</a>
										</div>
										<div class="col-sm-12 col-lg-6 moreInfo">
											<div class="dropdown onHover">
												<div id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true" role="menu">
													<i class="fa fa-share-alt"></i> Share
												</div>
													
												<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
													<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-twitter"></i></a></li>
													<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-facebook"></i></a></li>
													<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-google-plus"></i></a></li>
													<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-linkedin"></i></a></li>
													<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-pinterest-p"></i></a></li>
													<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-tumblr"></i></a></li>
													<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-envelope"></i></a></li>
												</ul>
											</div>
											<div><span><i class="fa fa-eye"></i> 86</span> Views</div>
											<div><span><i class="fa fa-comments"></i> 36</span> Comments</div>
										</div>
									</div>
								</footer>
							</div>
						</article>
							
						<!-- Politics -->
						<div class="relatedArticles">
							<header class="box">
								<h2>Politics</h2>
							</header>
							<div class="articlesListing masonryListing">
								<div class="js-related-articles-carousel">


						@foreach ($data as $article)

						@php
							$featured = json_decode($article -> featured)
						@endphp


						@if ($featured -> format == 'image')
								<div class="i">
										<article class="article">
											<div class="image">
												<a href="post-detail-standard.html" title="#" class="favs">
													<i class="fa fa-heart"></i>
													<div class="count">54</div>
												</a>
												<a href="post-detail-standard.html" title="#">
													<img src="media/post/{{$featured -> image}}" alt="#" width="770" height="579" class="img-responsive">
												</a>
											</div>
											<div class="box">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">{{
														$article -> title
													}}</a>
												</h3>
												<div class="info">
													<div>
														<span class="date">March 26, <span data-current-year></span></span>
													</div>
													<div>by <a href="post-detail-standard.html" title="#">Themees</a></div>
													<div>in <a href="post-detail-standard.html" title="#">Nature</a></div>
													<div>8 min read</div>
												</div>
												<p>


											


{!! Str::of(htmlspecialchars($article-> content))->words(40)!!}
												</p>
												<div class="btns text-center">
													<a href="post-detail-standard.html" title="#" class="btn btn-primary"><span>Continue reading</span></a>
												</div>

												<footer class="footer">
													<div class="row">
														<div class="col-sm-12 col-lg-6 tags">
															<a href="post-detail-standard.html" title="#">#Escape</a>
															<a href="post-detail-standard.html" title="#">#Cityt</a>
														</div>
														<div class="col-sm-12 col-lg-6 moreInfo">
															<div class="dropdown onHover">
																<div id="dropdownMenu2" data-toggle="dropdown" aria-expanded="true" role="menu">
																	<i class="fa fa-share-alt"></i>
																</div>
																	
																<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
																	<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-twitter"></i></a></li>
																	<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-facebook"></i></a></li>
																	<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-google-plus"></i></a></li>
																	<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-linkedin"></i></a></li>
																	<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-pinterest-p"></i></a></li>
																	<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-tumblr"></i></a></li>
																	<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-envelope"></i></a></li>
																</ul>
															</div>
															<div><span><i class="fa fa-eye"></i> 26</span></div>
															<div><span><i class="fa fa-comments"></i> 96</span></div>
														</div>
													</div>
												</footer>
											</div>
										</article>
									</div>
						@endif





								



									@endforeach


								</div>
							</div>
						</div>

















						<!-- Column -->
						<div class="aboutAuthor box" style="background-image: url('frontend/tmp/155x310-1.jpg');">
							<div class="row">
								<div class="col-xs-12 col-sm-4 imageWrap">
									<img src="frontend/tmp/190x190-1.jpg" alt="#" width="190" height="190" class="img-responsive image">
								</div>
								<div class="col-xs-12 col-sm-8">
									<div class="infos">
										<div class="name">Column: Nulla in dui lacinia neque mattis</div>
										<p class="info">John Doe neque mattis posuere eget eu ipsum</p>
										<p class="text">
											Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla in dui lacinia neque mattis posuere eget eu ipsum. Proin hendrerit volutpat leo id sodales.
											Curabitur ut est libero. Nam faucibus augue vel orci porta, a ultricies sem dapibus. Suspendisse potenti. Vestibulum eu turpis euismod, euismod nisl vitae, mollis tellus.
										</p>

										<div class="btns">
											<a href="#" title="#" class="btn"><span>Follow</span></a>
											<a href="#" title="#" class="btn btn-color-full"><span>Read Now</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row js-masonry-listing">
							<!-- Standard post -->
							<div class="col-xs-6 col-sm-12 col-md-6 masonryItem">
								<article class="article">
									<div class="image">
										<a href="#" title="#" class="favs">
											<i class="fa fa-heart"></i>
											<div class="count">36</div>
										</a>
										<a href="#" title="#">
											<img src="frontend/tmp/770x579-15.jpg" alt="#" width="770" height="579" class="img-responsive">
										</a>
									</div>
									<div class="box">
										<h3 class="title">
											<a href="post-detail-standard.html" title="#">Mauris accumsan eleifend magna</a>
										</h3>
										<div class="info">
											<div>
												<span class="date">March 26, <span data-current-year></span></span>
											</div>
											<div>by <a href="#" title="#">Themees</a></div>
											<div>in <a href="#" title="#">Nature</a></div>
											<div>3 min read</div>
										</div>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris accumsan eleifend magna. Curabitur scelerisque vitae augue ac dignissim.
											Aliquam erat volutpat. Proin in ultricies ligula. Etiam rutrum porta lacus in posuere. vel tortor tempor risus ultricies bibendum...
										</p>
										<div class="btns text-center">
											<a href="#" title="#" class="btn btn-primary"><span>Continue reading</span></a>
										</div>

										<footer class="footer">
											<div class="row">
												<div class="col-sm-12 col-lg-6 tags">
													<a href="#" title="#">#Nature</a>
													<a href="#" title="#">#Forest</a>
												</div>
												<div class="col-sm-12 col-lg-6 moreInfo">
													<div class="dropdown onHover">
														<div id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true" role="menu">
															<i class="fa fa-share-alt"></i>
														</div>
															
														<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
															<li><a href="#" title="#" class="i"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-google-plus"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-linkedin"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-pinterest-p"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-tumblr"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-envelope"></i></a></li>
														</ul>
													</div>
													<div><span><i class="fa fa-eye"></i> 86</span></div>
													<div><span><i class="fa fa-comments"></i> 36</span></div>
												</div>
											</div>
										</footer>
									</div>
								</article>
							</div>
							
							<!-- Image mosaic -->
							<div class="col-xs-6 col-sm-12 col-md-6 masonryItem">
								<article class="article">
									<div class="image">

										<a href="#" title="#" class="favs">
											<i class="fa fa-heart"></i>
											<div class="count">28</div>
										</a>

										<!-- Image mosaic -->
										<div class="imageMosaic">
											<div class="row">
												<div class="col-xs-7 i">
													<a href="#" title="#">
														<img src="frontend/tmp/498x332-1.jpg" alt="#" width="498" height="332" class="img-responsive">
													</a>
												</div>
												<div class="col-xs-5 i">
													<a href="#" title="#">
														<img src="frontend/tmp/268x332-1.jpg" alt="#" width="268" height="332" class="img-responsive">
													</a>
												</div>
												<div class="col-xs-6 i">
													<a href="#" title="#">
														<img src="frontend/tmp/383x257-1.jpg" alt="#" width="383" height="257" class="img-responsive">
													</a>
												</div>
												<div class="col-xs-6 i">
													<a href="#" title="#">
														<img src="frontend/tmp/383x257-2.jpg" alt="#" width="383" height="257" class="img-responsive">
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="box">
										<h3 class="title">
											<a href="#" title="#">There is something in the New York air that makes sleep useless.</a>
										</h3>
										<div class="info">
											<div>
												<span class="date">March 26, <span data-current-year></span></span>
											</div>
											<div>by <a href="#" title="#">Themees</a></div>
											<div>in <a href="#" title="#">Travel</a></div>
											<div>8 min read</div>
										</div>
										<p>
											Maecenas scelerisque luctus lorem non commodo. Nam turpis risus, auctor vel dui nec, mollis tempus quam. Praesent non ex arcu. Nullam efficitur interdum tempus.
											Donec eleifend a massa quis fermentum. Duis pharetra dignissim velit auctor consequat.
										</p>
										<div class="btns text-center">
											<a href="#" title="#" class="btn btn-primary"><span>Continue reading</span></a>
										</div>

										<footer class="footer">
											<div class="row">
												<div class="col-sm-12 col-lg-6 tags">
													<a href="#" title="#">#New York</a>
													<a href="#" title="#">#Travel</a>
													<a href="#" title="#">#Journey</a>
												</div>
												<div class="col-sm-12 col-lg-6 moreInfo">
													<div class="dropdown onHover">
														<div id="dropdownMenu2" data-toggle="dropdown" aria-expanded="true" role="menu">
															<i class="fa fa-share-alt"></i>
														</div>
															
														<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
															<li><a href="#" title="#" class="i"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-google-plus"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-linkedin"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-pinterest-p"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-tumblr"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-envelope"></i></a></li>
														</ul>
													</div>
													<div><span><i class="fa fa-eye"></i> 95</span></div>
													<div><span><i class="fa fa-comments"></i> 54</span></div>
												</div>
											</div>
										</footer>
									</div>
								</article>
							</div>
							
							<!-- Gallery post -->
							<div class="col-xs-6 col-sm-12 col-md-6 masonryItem">
								<article class="article">
									<div class="image postGalleryCarousel">

										<a href="#" title="#" class="favs">
											<i class="fa fa-heart"></i>
											<div class="count">35</div>
										</a>

										<div class="js-post-gallery-carousel">
											<div class="i">
												<a href="#" title="#">
													<img src="frontend/tmp/770x579-13.jpg" alt="#" width="770" height="579" class="img-responsive">
												</a>
											</div>
											<div class="i">
												<a href="#" title="#">
													<img src="frontend/tmp/770x579-14.jpg" alt="#" width="770" height="579" class="img-responsive">
												</a>
											</div>
											<div class="i">
												<a href="#" title="#">
													<img src="frontend/tmp/770x579-16.jpg" alt="#" width="770" height="579" class="img-responsive">
												</a>
											</div>
										</div>
									</div>
									<div class="box">
										<h3 class="title">
											<a href="post-detail-gallery.html" title="#">Curabitur scelerisque vitae augue!</a>
										</h3>
										<div class="info">
											<div>
												<span class="date">March 25, <span data-current-year></span></span>
											</div>
											<div>by <a href="#" title="#">Themees</a></div>
											<div>in <a href="#" title="#">Creative</a></div>
											<div>3 min read</div>
										</div>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris accumsan eleifend magna. Curabitur scelerisque vitae augue ac dignissim.
											Aliquam erat volutpat. Proin in ultricies ligula. Etiam rutrum porta lacus in posuere. vel tortor tempor risus ultricies bibendum...
										</p>
										<div class="btns text-center">
											<a href="#" title="#" class="btn btn-primary"><span>Continue reading</span></a>
										</div>

										<footer class="footer">
											<div class="row">
												<div class="col-sm-12 col-lg-6 tags">
													<a href="#" title="#">#Fuji</a>
													<a href="#" title="#">#Camera</a>
													<a href="#" title="#">#Photography</a>
												</div>
												<div class="col-sm-12 col-lg-6 moreInfo">
													<div class="dropdown onHover">
														<div id="dropdownMenu3" data-toggle="dropdown" aria-expanded="true" role="menu">
															<i class="fa fa-share-alt"></i>
														</div>
															
														<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3">
															<li><a href="#" title="#" class="i"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-google-plus"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-linkedin"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-pinterest-p"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-tumblr"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-envelope"></i></a></li>
														</ul>
													</div>
													<div><span><i class="fa fa-eye"></i> 75</span></div>
													<div><span><i class="fa fa-comments"></i> 12</span></div>
												</div>
											</div>
										</footer>
									</div>
								</article>
							</div>

							<!-- Video vimeo post -->
							<div class="col-xs-6 col-sm-12 col-md-6 masonryItem">
								<article class="article">
									<div class="video">
										<a href="#" title="#" class="favs">
											<i class="fa fa-heart"></i>
											<div class="count">54</div>
										</a>
										<div class="embed-responsive embed-responsive-16by9">
											<iframe src="https://player.vimeo.com/video/92289291?byline=0&amp;portrait=0" width="750" height="421" allowfullscreen></iframe>
										</div>
									</div>
									<div class="box">
										<h3 class="title">
											<a href="#" title="#">Sarajevo from the sky</a>
										</h3>
										<div class="info">
											<div>
												<span class="date">March 24, <span data-current-year></span></span>
											</div>
											<div>by <a href="#" title="#">Themees</a></div>
											<div>in <a href="#" title="#">Travel</a></div>
											<div><i class="fa fa-clock-o"></i> 4:24</div>
											<div>3 min read</div>
										</div>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris accumsan eleifend magna. Curabitur scelerisque vitae augue ac dignissim.
											Aliquam erat volutpat. Proin in ultricies ligula. Etiam rutrum porta lacus in posuere. vel tortor tempor risus ultricies bibendum...
										</p>
										<div class="btns text-center">
											<a href="#" title="#" class="btn btn-primary btn-light-blue"><span>Watch on vimeo</span></a>
											<a href="#" title="#" class="btn btn-primary"><span>Continue reading</span></a>
										</div>

										<footer class="footer">
											<div class="row">
												<div class="col-sm-12 col-lg-6 tags">
													<a href="#" title="#">#Travel</a>
													<a href="#" title="#">#Sarajevo</a>
													<a href="#" title="#">#Sky</a>
												</div>
												<div class="col-sm-12 col-lg-6 moreInfo">
													<div class="dropdown onHover">
														<div id="dropdownMenu4" data-toggle="dropdown" aria-expanded="true" role="menu">
															<i class="fa fa-share-alt"></i>
														</div>
															
														<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
															<li><a href="#" title="#" class="i"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-google-plus"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-linkedin"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-pinterest-p"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-tumblr"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-envelope"></i></a></li>
														</ul>
													</div>
													<div><span><i class="fa fa-eye"></i> 86</span></div>
													<div><span><i class="fa fa-comments"></i> 36</span></div>
												</div>
											</div>
										</footer>
									</div>
								</article>
							</div>
						</div>
						

						<!-- Pagination numbers -->
						<div class="paginations pagination-numbers">
							<div class="row">
								<div class="col-xs-12 col-md-3 info i">
									Page 01 of 12
								</div>
								<div class="col-xs-12 col-md-9 i">
									<nav>
										<ul>
											<li class="prev prevnext"><a href="#" title="#"><i class="fa fa-angle-left"></i></a></li>
											<li class="hoverExtend active"><a href="#" title="#">01</a></li>
											<li class="hoverExtend"><a href="#" title="#">02</a></li>
											<li class="hoverExtend"><a href="#" title="#">03</a></li>
											<li>...</li>
											<li class="hoverExtend"><a href="#" title="#">12</a></li>
											<li class="next prevnext"><a href="#" title="#"><i class="fa fa-angle-right"></i></a></li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
						
						<!-- Pagination load more -->
						<div class="paginations pagination-loadmore hoverExtend active">
							<a href="#" title="#">Load more</a>
						</div>

						<!-- Pagination previous / next -->
						<div class="paginations pagination-prevnext">
							<div class="row">
								<div class="col-xs-4 prev hoverExtend active">
									<a href="#" title="#">Previous</a>
								</div>
								<div class="col-xs-4 info hidden-xs">Page 01 of 12</div>
								<div class="col-xs-4 col-xs-offset-4 col-sm-offset-0 next hoverExtend active text-right">
									<a href="#" title="#">Next</a>
								</div>
							</div>
						</div>
					</div>
				</div>