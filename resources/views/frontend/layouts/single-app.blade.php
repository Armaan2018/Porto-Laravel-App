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
		





		<!-- Content -->
		<div class="container">
			<div class="row">
				<!-- Listings -->


         		<div class="container">
			<div class="row">
				<!-- Listings -->
				<div class="col-xs-12 col-sm-8">
					<div class="articlesListing">

						<!-- Post detail -->
						<article class="article articleDetail">
							<div class="image">
								<div class="favs">
									<i class="fa fa-heart"></i>
									<div class="count">36</div>
								</div>



                                   @php
                                   	$nav = json_decode($single -> featured)
                                   @endphp
                              		<img src="{{URL::to('/')}}/media/post/{{$nav -> image}}" alt="#" width="770" height="513" class="img-responsive">
 
						
							</div>
							<div class="box">
								<h3 class="title">
									{{ $single -> title}}
								</h3>
								<div class="info">
									<div>
										<span class="date">March 26, <span data-current-year></span></span>
									</div>
									<div>by <a href="#" title="#">Themees</a></div>
									<div>in <a href="#" title="#">Nature</a></div>
									<div>3 min read</div>
								</div>

								<div class="rte js-imagelightbox">
									<p class="drop-cap-1">


									</p>

									<blockquote class="blockquote-1">
										{{ $single -> content}}
									</blockquote>


									<p>
										Phasellus pharetra arcu sit amet lacus consectetur feugiat. In suscipit quam vel lorem ultricies convallis. <strong>Morbi ex arcu</strong>, venenatis vel tincidunt sit amet, mattis sed tortor. 
										Sed accumsan, augue eu dapibus vestibulum, metus ex viverra ante, vel auctor orci metus eu lacus. <span class="format-orange">Maecenas condimentum metus quis enim porta elementum</span>. 
										Duis eu blandit lectus, id vehicula ligula cras tempor interdum est. Integer non finibus neque.
									</p>
								</div>

								<div class="socialShare">
									<a href="#" title="#" class="i"><i class="fa fa-twitter"></i></a>
									<a href="#" title="#" class="i"><i class="fa fa-facebook"></i></a>
									<a href="#" title="#" class="i"><i class="fa fa-google-plus"></i></a>
									<a href="#" title="#" class="i"><i class="fa fa-linkedin"></i></a>
									<a href="#" title="#" class="i"><i class="fa fa-pinterest-p"></i></a>
									<a href="#" title="#" class="i"><i class="fa fa-tumblr"></i></a>
									<a href="#" title="#" class="i"><i class="fa fa-print"></i></a>
									<a href="#" title="#" class="i"><i class="fa fa-envelope"></i></a>
									<a href="#" title="#" class="i"><i class="fa fa-heart"></i></a>
								</div>

								<footer class="footer">
									<div class="row">
										<div class="col-sm-12 col-lg-6 tags">
											<a href="#" title="#">#Nature</a>
											<a href="#" title="#">#Forest</a>
										</div>
										<div class="col-sm-12 col-lg-6 moreInfo">
											<div><span><i class="fa fa-eye"></i> 86</span> Views</div>
											<div><span><i class="fa fa-comments"></i> 36</span> Comments</div>
										</div>
									</div>
								</footer>
							</div>
						</article>
						<!-- Comments -->
						<div class="articleComments box">
							<h2>Comments</h2>

							<form data-parsley-validate>
								<div class="row">
									<div class="col-xs-12 i">
										<input type="text" class="input" placeholder="Leave a message..." required data-parsley-error-message="Please enter message">
									</div>
									<div class="col-xs-12 col-sm-4 i">
										<input type="text" class="input" placeholder="Name..." required data-parsley-error-message="Please enter name">
									</div>
									<div class="col-xs-12 col-sm-4 i">
										<input type="email" class="input" placeholder="E-mail..." required data-parsley-error-message="Please enter email">
									</div>
									<div class="col-xs-12 col-sm-4 i">
										<input type="text" class="input" placeholder="Website...">
									</div>

									<div class="col-xs-12">
										<div class="btns">
											<a href="#" title="#" class="btn fb"><span><i class="fa fa-facebook icon"></i> Connect</span></a>
											<a href="#" title="#" class="btn twitter"><span><i class="fa fa-twitter icon"></i> Connect</span></a>
											<a href="#" title="#" class="btn google-plus"><span><i class="fa fa-google-plus icon"></i> Connect</span></a>
											<button type="submit" class="btn btn-color-full submit">
												<span>Comment</span>
											</button>
										</div>
									</div>
								</div>
							</form>
						</div>
												<!-- Article comments listing -->
						<div class="articleCommentsListing">
							<ul>
								<!-- Comment -->
								<li class="i">
									<div class="image">
										<img src="frontend/tmp/60x60-1.jpg" alt="#" width="60" height="60">
									</div>
									<div class="box">
										<header>
											<div class="row">
												<div class="col-xs-12 col-lg-8 commentInfo">
													<span class="name">Andrew</span>
													<span class="time info">20 minutes ago</span>
													<span class="showHide info">Hide</span>
												</div>
												<div class="col-xs-12 col-lg-4 options">
													<div class="likes">
														<span>63</span> <a href="#" title="#"><i class="fa fa-thumbs-o-up"></i></a>
													</div>
													<div class="dropdown onHover">
														<div id="dropdownMenu7" data-toggle="dropdown" aria-expanded="true" role="menu">
															<i class="fa fa-share-alt"></i>
														</div>
															
														<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu7">
															<li><a href="#" title="#" class="i"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-google-plus"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-linkedin"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-pinterest-p"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-tumblr"></i></a></li>
															<li><a href="#" title="#" class="i"><i class="fa fa-envelope"></i></a></li>
														</ul>
													</div>
													<div>
														<a href="#" title="#"><i class="fa fa-reply"></i></a>
													</div>
												</div>
											</div>
										</header>
										<div class="c">
											<p>Praesent maximus elementum nisl, viverra scelerisque quam eleifend eu. Quisque ultricies fermentum luctus. Aenean elementum ornare nisl eget.</p>
										</div>
									</div>

									<ul>
										<!-- Comment -->
										<li class="i">
											<div class="image">
												<img src="frontend/tmp/60x60-3.jpg" alt="#" width="60" height="60">
											</div>
											<div class="box">
												<header>
													<div class="row">
														<div class="col-xs-12 col-lg-8 commentInfo">
															<span class="name">Anny</span>
															<span class="time info">15 minutes ago</span>
															<span class="showHide info">Hide</span>
														</div>
														<div class="col-xs-12 col-lg-4 options">
															<div class="likes">
																<span>22</span> <a href="#" title="#"><i class="fa fa-thumbs-o-up"></i></a>
															</div>
															<div class="dropdown onHover">
																<div id="dropdownMenu8" data-toggle="dropdown" aria-expanded="true" role="menu">
																	<i class="fa fa-share-alt"></i>
																</div>
																	
																<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu8">
																	<li><a href="#" title="#" class="i"><i class="fa fa-twitter"></i></a></li>
																	<li><a href="#" title="#" class="i"><i class="fa fa-facebook"></i></a></li>
																	<li><a href="#" title="#" class="i"><i class="fa fa-google-plus"></i></a></li>
																	<li><a href="#" title="#" class="i"><i class="fa fa-linkedin"></i></a></li>
																	<li><a href="#" title="#" class="i"><i class="fa fa-pinterest-p"></i></a></li>
																	<li><a href="#" title="#" class="i"><i class="fa fa-tumblr"></i></a></li>
																	<li><a href="#" title="#" class="i"><i class="fa fa-envelope"></i></a></li>
																</ul>
															</div>
															<div>
																<a href="#" title="#"><i class="fa fa-reply"></i></a>
															</div>
														</div>
													</div>
												</header>
												<div class="c">
													<p>Praesent maximus elementum nisl, viverra scelerisque quam eleifend eu. Quisque ultricies fermentum luctus. Aenean elementum ornare nisl eget.</p>
												</div>
											</div>
										</li>
									</ul>
								</li>
							</ul>
						</div>
						<!-- About author -->
						<div class="aboutAuthor box" style="background-image: url('frontend/tmp/155x310-1.jpg');">
							<div class="row">
								<div class="col-xs-12 col-sm-4 imageWrap">
									<img src="frontend/tmp/190x190-1.jpg" alt="#" width="190" height="190" class="img-responsive image">
								</div>
								<div class="col-xs-12 col-sm-8">
									<div class="infos">
										<div class="name">Andrew Doe</div>
										<p class="info">Blog specialist, design nerd and I like muffins.</p>
										<p class="text">
											Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla in dui lacinia neque mattis posuere eget eu ipsum. Proin hendrerit volutpat leo id sodales.
											Curabitur ut est libero. Nam faucibus augue vel orci porta, a ultricies sem dapibus. Suspendisse potenti. Vestibulum eu turpis euismod, euismod nisl vitae, mollis tellus.
										</p>

										<div class="btns">
											<a href="#" title="#" class="btn"><span>Follow</span></a>
											<a href="#" title="#" class="btn btn-color-full"><span>Message</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Previous / next article -->
						<div class="prevNextArticle box">
							<div class="row">
								<div class="col-xs-6 i">
									<a href="post-detail-standard.html" title="#">
										<div class="hoverExtend active">
											<span>Previous article</span>
										</div>
										<div class="title">Checkin' out my new Fuji camera</div>
									</a>
								</div>
								<div class="col-xs-6 i">
									<a href="post-detail-standard.html" title="#">
										<div class="hoverExtend active">
											<span>Next article</span>
										</div>
										<div class="title">There is something in the New York air that makes sleep useless</div>
									</a>
								</div>
							</div>
						</div>

						<!-- Related articles -->
						<section class="relatedArticles">
							<header class="box">
								<h2>Related posts</h2>
							</header>
							<div class="articlesListing">
								<div class="js-related-articles-carousel">
									<div class="i">
										<article class="article">
											<div class="image">
												<a href="post-detail-standard.html" title="#" class="favs">
													<i class="fa fa-heart"></i>
													<div class="count">36</div>
												</a>
												<a href="post-detail-standard.html" title="#">
													<img src="frontend/tmp/770x579-6.jpg" alt="#" width="770" height="579" class="img-responsive">
												</a>
											</div>
											<div class="box">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">A short walk in the forest</a>
												</h3>
												<div class="info">
													<div>
														<span class="date">March 26, <span data-current-year></span></span>
													</div>
													<div>by <a href="post-detail-standard.html" title="#">Themees</a></div>
													<div>in <a href="post-detail-standard.html" title="#">Nature</a></div>
													<div>15 min read</div>
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
															<a href="post-detail-standard.html" title="#">#Walk</a>
															<a href="post-detail-standard.html" title="#">#Forest</a>
														</div>
														<div class="col-sm-12 col-lg-6 moreInfo">
															<div class="dropdown onHover">
																<div id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true" role="menu">
																	<i class="fa fa-share-alt"></i>
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
															<div><span><i class="fa fa-eye"></i> 45</span></div>
															<div><span><i class="fa fa-comments"></i> 97</span></div>
														</div>
													</div>
												</footer>
											</div>
										</article>
									</div>

									<div class="i">
										<article class="article">
											<div class="image">
												<a href="post-detail-standard.html" title="#" class="favs">
													<i class="fa fa-heart"></i>
													<div class="count">54</div>
												</a>
												<a href="post-detail-standard.html" title="#">
													<img src="frontend/tmp/770x579-5.jpg" alt="#" width="770" height="579" class="img-responsive">
												</a>
											</div>
											<div class="box">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">My weekend escape from the city</a>
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
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris accumsan eleifend magna. Curabitur scelerisque vitae augue ac dignissim.
													Aliquam erat volutpat. Proin in ultricies ligula. Etiam rutrum porta lacus in posuere. vel tortor tempor risus ultricies bibendum...
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

									<div class="i">
										<article class="article">
											<div class="image">
												<a href="post-detail-standard.html" title="#" class="favs">
													<i class="fa fa-heart"></i>
													<div class="count">36</div>
												</a>
												<a href="post-detail-standard.html" title="#">
													<img src="frontend/tmp/770x579-7.jpg" alt="#" width="770" height="579" class="img-responsive">
												</a>
											</div>
											<div class="box">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">What a wonderful world!</a>
												</h3>
												<div class="info">
													<div>
														<span class="date">March 26, <span data-current-year></span></span>
													</div>
													<div>by <a href="post-detail-standard.html" title="#">World</a></div>
													<div>in <a href="post-detail-standard.html" title="#">Feelings</a></div>
													<div>15 min read</div>
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
															<a href="post-detail-standard.html" title="#">#Walk</a>
															<a href="post-detail-standard.html" title="#">#Forest</a>
														</div>
														<div class="col-sm-12 col-lg-6 moreInfo">
															<div class="dropdown onHover">
																<div id="dropdownMenu3" data-toggle="dropdown" aria-expanded="true" role="menu">
																	<i class="fa fa-share-alt"></i>
																</div>
																	
																<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3">
																	<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-twitter"></i></a></li>
																	<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-facebook"></i></a></li>
																	<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-google-plus"></i></a></li>
																	<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-linkedin"></i></a></li>
																	<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-pinterest-p"></i></a></li>
																	<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-tumblr"></i></a></li>
																	<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-envelope"></i></a></li>
																</ul>
															</div>
															<div><span><i class="fa fa-eye"></i> 45</span></div>
															<div><span><i class="fa fa-comments"></i> 97</span></div>
														</div>
													</div>
												</footer>
											</div>
										</article>
									</div>

									<div class="i">
										<article class="article">
											<div class="image">
												<a href="post-detail-standard.html" title="#" class="favs">
													<i class="fa fa-heart"></i>
													<div class="count">54</div>
												</a>
												<a href="post-detail-standard.html" title="#">
													<img src="frontend/tmp/770x579-8.jpg" alt="#" width="770" height="579" class="img-responsive">
												</a>
											</div>
											<div class="box">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Summer in Scotland...</a>
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
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris accumsan eleifend magna. Curabitur scelerisque vitae augue ac dignissim.
													Aliquam erat volutpat. Proin in ultricies ligula. Etiam rutrum porta lacus in posuere. vel tortor tempor risus ultricies bibendum...
												</p>
												<div class="btns text-center">
													<a href="post-detail-standard.html" title="#" class="btn btn-primary"><span>Continue reading</span></a>
												</div>

												<footer class="footer">
													<div class="row">
														<div class="col-sm-12 col-lg-6 tags">
															<a href="post-detail-standard.html" title="#">#Summer</a>
															<a href="post-detail-standard.html" title="#">#Scotland</a>
														</div>
														<div class="col-sm-12 col-lg-6 moreInfo">
															<div class="dropdown onHover">
																<div id="dropdownMenu4" data-toggle="dropdown" aria-expanded="true" role="menu">
																	<i class="fa fa-share-alt"></i>
																</div>
																	
																<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
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

									<div class="i">
										<article class="article">
											<div class="image">
												<a href="post-detail-standard.html" title="#" class="favs">
													<i class="fa fa-heart"></i>
													<div class="count">36</div>
												</a>
												<a href="post-detail-standard.html" title="#">
													<img src="frontend/tmp/770x579-9.jpg" alt="#" width="770" height="579" class="img-responsive">
												</a>
											</div>
											<div class="box">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Oranges are not the only fruit</a>
												</h3>
												<div class="info">
													<div>
														<span class="date">March 26, <span data-current-year></span></span>
													</div>
													<div>by <a href="post-detail-standard.html" title="#">Themees</a></div>
													<div>in <a href="post-detail-standard.html" title="#">Nature</a></div>
													<div>15 min read</div>
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
															<a href="post-detail-standard.html" title="#">#Walk</a>
															<a href="post-detail-standard.html" title="#">#Forest</a>
														</div>
														<div class="col-sm-12 col-lg-6 moreInfo">
															<div class="dropdown onHover">
																<div id="dropdownMenu5" data-toggle="dropdown" aria-expanded="true" role="menu">
																	<i class="fa fa-share-alt"></i>
																</div>
																	
																<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu5">
																	<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-twitter"></i></a></li>
																	<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-facebook"></i></a></li>
																	<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-google-plus"></i></a></li>
																	<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-linkedin"></i></a></li>
																	<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-pinterest-p"></i></a></li>
																	<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-tumblr"></i></a></li>
																	<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-envelope"></i></a></li>
																</ul>
															</div>
															<div><span><i class="fa fa-eye"></i> 45</span></div>
															<div><span><i class="fa fa-comments"></i> 97</span></div>
														</div>
													</div>
												</footer>
											</div>
										</article>
									</div>

									<div class="i">
										<article class="article">
											<div class="image">
												<a href="post-detail-standard.html" title="#" class="favs">
													<i class="fa fa-heart"></i>
													<div class="count">54</div>
												</a>
												<a href="post-detail-standard.html" title="#">
													<img src="frontend/tmp/770x579-10.jpg" alt="#" width="770" height="579" class="img-responsive">
												</a>
											</div>
											<div class="box">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Coffee time</a>
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
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris accumsan eleifend magna. Curabitur scelerisque vitae augue ac dignissim.
													Aliquam erat volutpat. Proin in ultricies ligula. Etiam rutrum porta lacus in posuere. vel tortor tempor risus ultricies bibendum...
												</p>
												<div class="btns text-center">
													<a href="post-detail-standard.html" title="#" class="btn btn-primary"><span>Continue reading</span></a>
												</div>

												<footer class="footer">
													<div class="row">
														<div class="col-sm-12 col-lg-6 tags">
															<a href="post-detail-standard.html" title="#">#Coffee</a>
														</div>
														<div class="col-sm-12 col-lg-6 moreInfo">
															<div class="dropdown onHover">
																<div id="dropdownMenu6" data-toggle="dropdown" aria-expanded="true" role="menu">
																	<i class="fa fa-share-alt"></i>
																</div>
																	
																<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu6">
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
								</div>
							</div>
						</section>




					</div>
				</div>

				@include('frontend.layouts.single-sidebar')

			</div>
		</div>



				<!-- Aside -->

          


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
