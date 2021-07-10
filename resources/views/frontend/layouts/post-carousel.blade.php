		<div class="mainCarousel mainCarousel-1">
			<div class="container">
				<div class="c-row">
					<div class="js-main-carousel-1">


						@foreach ($data as $article)

						@php
							$featured = json_decode($article -> featured)
						@endphp
                                       @if ($featured -> format == 'image')
                                       	{{-- expr --}}
                                      
											<article class="i article">
							<a href="post-detail-standard.html" title="#">
								<img src="media/post/{{ $featured -> image}}" alt="#" width="580" height="550" class="img-responsive">
							</a>
							<div class="c">
								<h2 class="title">
									<a href="post-detail-standard.html" title="#">{{ $article -> title}}</a>
								</h2>
								<div class="info">
@foreach ($article -> categories as $cat)
										<a href="post-detail-standard.html" title="#">{{ $cat -> name}}</a>
@endforeach
								</div>
							</div>
						</article>


						 @endif
						@endforeach


					</div>
				</div>
			</div>
		</div>