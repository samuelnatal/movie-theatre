@extends('layouts.app2')

@section('content')
<!-- hero area start -->
<section class="hero-area" id="home">
	<div class="container">
		<div class="hero-area-slider">

			@for ($i = 0; $i < 3; $i++) <div class="row hero-area-slide">
				<div class="col-lg-6 col-md-5">
					<div class="hero-area-content ">

						<img style="height:550px" src="{{ Storage::url($slides[$i]->image) }}" alt="portfolio" />

						<a href="{{ $slides[$i]->trailer }}" class="popup-youtube">
							<i style="bottom:90px" class="icofont icofont-ui-play"></i>
						</a>
					</div>
				</div>

				<div class="col-lg-6 col-md-7">
					<div class="hero-area-content pr-50">
						<h2>{{ $slides[$i]->title }}</h2>
						<div class="review">
							<div class="author-review">
								<i class="icofont icofont-star"></i>
								<i class="icofont icofont-star"></i>
								<i class="icofont icofont-star"></i>
								<i class="icofont icofont-star"></i>
								<i class="icofont icofont-star"></i>
							</div>
							<h4>180k voters</h4>
						</div>
						<p>{{ $slides[$i]->overview }}</p>
						<h3>Cast:</h3>
						<div class="slide-cast">
							<div class="single-slide-cast">
								<img src="img/cast/cast1.png" alt="about" />
							</div>
							<div class="single-slide-cast">
								<img src="img/cast/cast3.png" alt="about" />
							</div>
							<div class="single-slide-cast">
								<img src="img/cast/cast4.png" alt="about" />
							</div>
							<div class="single-slide-cast">
								<img src="img/cast/cast5.png" alt="about" />
							</div>
							<div class="single-slide-cast">
								<img src="img/cast/cast6.png" alt="about" />
							</div>
							<div class="single-slide-cast">
								<img src="img/cast/cast7.png" alt="about" />
							</div>
							<div class="single-slide-cast text-center">
								5+
							</div>
						</div>
						<h4>$ {{ $slides[$i]->price }}</h4>
						<div class="slide-trailor">
							<a class="theme-btn theme-btn2" href="/synopsis?movieID={{ $slides[$i]->movieID }}"> More details</a>
							<a class="theme-btn corousel-tkt-btn popup-youtube"  href="{{ $slides[$i]->trailer }}"> Warch trailer</a>
						</div>
					</div>
				</div>
		</div>
		@endfor
	</div>


	<div class="hero-area-thumb">
		<div class="thumb-prev">
			<div class="row hero-area-slide">
				<div class="col-lg-6">
					<div class="hero-area-content">
						<img src="img/slide3.png" alt="about" />
					</div>
				</div>
				<div class="col-lg-6">
					<div class="hero-area-content pr-50">
						<h2>Last Avatar</h2>
						<div class="review">
							<div class="author-review">
								<i class="icofont icofont-star"></i>
								<i class="icofont icofont-star"></i>
								<i class="icofont icofont-star"></i>
								<i class="icofont icofont-star"></i>
								<i class="icofont icofont-star"></i>
							</div>
							<h4>180k voters</h4>
						</div>
						<p>She is a devil princess from the demon world. She grew up sheltered by her parents and doesn't really know how to be evil or any of the common actions, She is unable to cry due to Keita's accidental first wish, despite needed for him to wish...</p>
						<h3>Cast:</h3>
						<div class="slide-cast">
							<div class="single-slide-cast">
								<img src="img/cast/cast1.png" alt="about" />
							</div>
							<div class="single-slide-cast">
								<img src="img/cast/cast2.html" alt="about" />
							</div>
							<div class="single-slide-cast">
								<img src="img/cast/cast3.png" alt="about" />
							</div>
							<div class="single-slide-cast">
								<img src="img/cast/cast4.png" alt="about" />
							</div>
							<div class="single-slide-cast">
								<img src="img/cast/cast5.png" alt="about" />
							</div>
							<div class="single-slide-cast">
								<img src="img/cast/cast6.png" alt="about" />
							</div>
							<div class="single-slide-cast">
								<img src="img/cast/cast7.png" alt="about" />
							</div>
							<div class="single-slide-cast text-center">
								5+
							</div>
						</div>
						<div class="slide-trailor">
							<h3>Watch Trailer</h3>
							<a class="theme-btn theme-btn2" href="#"><i class="icofont icofont-play"></i> Tickets</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="thumb-next">
			<div class="row hero-area-slide">
				<div class="col-lg-6">
					<div class="hero-area-content">
						<img src="img/slide1.png" alt="about" />
					</div>
				</div>
				<div class="col-lg-6">
					<div class="hero-area-content pr-50">
						<h2>The Deer God</h2>
						<div class="review">
							<div class="author-review">
								<i class="icofont icofont-star"></i>
								<i class="icofont icofont-star"></i>
								<i class="icofont icofont-star"></i>
								<i class="icofont icofont-star"></i>
								<i class="icofont icofont-star"></i>
							</div>
							<h4>180k voters</h4>
						</div>
						<p>She is a devil princess from the demon world. She grew up sheltered by her parents and doesn't really know how to be evil or any of the common actions, She is unable to cry due to Keita's accidental first wish, despite needed for him to wish...</p>
						<h3>Cast:</h3>
						<div class="slide-cast">
							<div class="single-slide-cast">
								<img src="img/cast/cast1.png" alt="about" />
							</div>
							<div class="single-slide-cast">
								<img src="img/cast/cast2.html" alt="about" />
							</div>
							<div class="single-slide-cast">
								<img src="img/cast/cast3.png" alt="about" />
							</div>
							<div class="single-slide-cast">
								<img src="img/cast/cast4.png" alt="about" />
							</div>
							<div class="single-slide-cast">
								<img src="img/cast/cast5.png" alt="about" />
							</div>
							<div class="single-slide-cast">
								<img src="img/cast/cast6.png" alt="about" />
							</div>
							<div class="single-slide-cast">
								<img src="img/cast/cast7.png" alt="about" />
							</div>
							<div class="single-slide-cast text-center">
								5+
							</div>
						</div>
						<div class="slide-trailor">
							<h3>Watch Trailer</h3>
							<a class="theme-btn theme-btn2" href="#"><i class="icofont icofont-play"></i> Tickets</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<!-- hero area end -->


<!-- portfolio section start -->
<section class="portfolio-area pt-60">
	<div class="container">
		<div class="row flexbox-center">
			<div class="col-lg-6 text-center text-lg-left">
				<div class="section-title">

					<h1><i class="icofont icofont-movie"></i> Spotlight This Month</h1>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-right">
				<div class="portfolio-menu">
					<ul>
						<li data-filter=".released" class="active">Recently Released</li>
						<li data-filter=".top">Today's movies</li>
						<li data-filter=".soon">Comming Soon</li>
					</ul>
				</div>
			</div>
		</div>
		<hr />
		<div class="row">
			<div class="col-lg-9">
				<div class="row portfolio-item">

					<!-- SOON -->
					@foreach ( $slides as $slide )
					<div class="col-md-4 col-sm-6 released">
						<a href="/synopsis?movieID={{ $slide->movieID }}">
							<div class="single-portfolio">
								<div class="single-portfolio-img">
									<img src="{{ Storage::url($slide->image)}}" style='width:300px; height:400px' alt="portfolio" />
									<a href="{{ $slide->trailer }}" class="popup-youtube">
										<i class="icofont icofont-ui-play"></i>
									</a>
								</div>
								<div class="portfolio-content">
									<h2>{{ $slide->title }}</h2>
									<div class="review">
										<div class="author-review">
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
										</div>
										<h4>180k voters</h4>
									</div>
								</div>
							</div>
						</a>
					</div>
					@endforeach


					<!-- TOP -->
					<div class="col-md-4 col-sm-6 top">
						<a href="/synopsis?movieID={{ $slide->movieID }}">
							<div class="single-portfolio">
								<div class="single-portfolio-img">
									<img src="img/portfolio/portfolio2.png" style='width:300px; height:400px' alt="portfolio" />
									<a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
										<i class="icofont icofont-ui-play"></i>
									</a>
								</div>
								<div class="portfolio-content">
									<h2>Tale of Revemge</h2>
									<div class="review">
										<div class="author-review">
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
										</div>
										<h4>180k voters</h4>
									</div>
								</div>
							</div>
						</a>
					</div>

					<!-- SOON -->
					@foreach ($soons as $soon)
					<div class="col-md-4 col-sm-6 soon">
						<a href="/synopsis?movieID={{ $soon->movieID }}">
							<div class="single-portfolio">
								<div class="single-portfolio-img">
									<img src="{{ Storage::url($soon->image)}}" style='width:300px; height:400px' alt="portfolio" />
									<a href="{{ $soon->trailer }}" class="popup-youtube">
										<i class="icofont icofont-ui-play"></i>
									</a>
								</div>
								<div class="portfolio-content">
									<h2>{{ $soon->title }}</h2>
									<div class="review">
										<div class="author-review">
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
										</div>
										<h4>180k voters</h4>
									</div>
								</div>
							</div>
						</a>
					</div>
					@endforeach
				</div>
			</div>
			<div class="col-lg-3 text-center text-lg-left">
				<div class="portfolio-sidebar">
					<img src="img/sidebar/sidebar1.png" alt="sidebar" />
					<img src="img/sidebar/sidebar2.png" alt="sidebar" />
					<img src="img/sidebar/sidebar3.png" alt="sidebar" />
					<img src="img/sidebar/sidebar4.png" alt="sidebar" />
				</div>
			</div>
		</div>
	</div>
</section>
<!-- portfolio section end -->


<!-- video section start -->
<section class="video ptb-90">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title pb-20">
					<h1><i class="icofont icofont-film"></i>Make it more enjoyable.</h1>
				</div>
			</div>
		</div>
		<hr style="margin-bottom:3%;" />

		<div id="carouselExample" class="carousel slide">
			<div class="carousel-inner">

				<div class="carousel-item active">
					<div class="row row-cols-1 row-cols-md-3 g-4">
						<div class="col">
							<div class="card h-100">
								<img src="img/services/popcorn.jpg" class="card-img-top " style="height:300px;" alt="...">
								<div class="card-body">
									<h5 class="card-title">PopCorns</h5>
									<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card h-100">
								<img src="img/services/bugger.jpg" class="card-img-top" alt="..." style="height:300px;">
								<div class="card-body">
									<h5 class="card-title">Bites</h5>
									<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card h-100">
								<img src="img/services/beer.jpeg" class="card-img-top " alt="..." style="height:300px;">
								<div class="card-body">
									<h5 class="card-title">Cold & Hot Drinks</h5>
									<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="carousel-item">
					<div class="row row-cols-1 row-cols-md-3 g-4">
						<div class="col">
							<div class="card h-100">
								<img src="img/services/food.jpg" class="card-img-top" alt="..." style="height:300px;">
								<div class="card-body">
									<h5 class="card-title">Food</h5>
									<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card h-100">
								<img src="img/services/juice.jpg" class="card-img-top" alt="..." style="height:300px;">
								<div class="card-body">
									<h5 class="card-title">Juices</h5>
									<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card h-100">
								<img src="img/services/coffee.png" class="card-img-top" alt="..." style="height:300px;">
								<div class="card-body">
									<h5 class="card-title">Hot Coffee</h5>
									<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev" style="left:-11% !important;">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next" style="left:96% !important;">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
</section>
<!-- video section end -->

<!-- news section start -->
<section class="news">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title pb-20">
					<h1><i class="icofont icofont-coffee-cup"></i> Latest News</h1>
				</div>
			</div>
		</div>
		<hr />
	</div>
	<div class="news-slide-area">
		<div class="news-slider">
			<div class="single-news">
				<div class="news-bg-1"></div>
				<div class="news-date">
					<h2><span>NOV</span> 25</h2>
					<h1>2017</h1>
				</div>
				<div class="news-content">
					<h2>The Witch Queen</h2>
					<p>Witch Queen is a tall woman with a slim build. She has pink hair, which is pulled up under her hat, and teal eyes.</p>
				</div>
				<a href="#">Read More</a>
			</div>
			<div class="single-news">
				<div class="news-bg-2"></div>
				<div class="news-date">
					<h2><span>NOV</span> 25</h2>
					<h1>2017</h1>
				</div>
				<div class="news-content">
					<h2>The Witch Queen</h2>
					<p>Witch Queen is a tall woman with a slim build. She has pink hair, which is pulled up under her hat, and teal eyes.</p>
				</div>
				<a href="#">Read More</a>
			</div>
			<div class="single-news">
				<div class="news-bg-3"></div>
				<div class="news-date">
					<h2><span>NOV</span> 25</h2>
					<h1>2017</h1>
				</div>
				<div class="news-content">
					<h2>The Witch Queen</h2>
					<p>Witch Queen is a tall woman with a slim build. She has pink hair, which is pulled up under her hat, and teal eyes.</p>
				</div>
				<a href="#">Read More</a>
			</div>
		</div>
		<div class="news-thumb">
			<div class="news-next">
				<div class="single-news">
					<div class="news-bg-3"></div>
					<div class="news-date">
						<h2><span>NOV</span> 25</h2>
						<h1>2017</h1>
					</div>
					<div class="news-content">
						<h2>The Witch Queen</h2>
						<p>Witch Queen is a tall woman with a slim build. She has pink hair, which is pulled up under her hat, and teal eyes.</p>
					</div>
					<a href="#">Read More</a>
				</div>
			</div>
			<div class="news-prev">
				<div class="single-news">
					<div class="news-bg-2"></div>
					<div class="news-date">
						<h2><span>NOV</span> 25</h2>
						<h1>2017</h1>
					</div>
					<div class="news-content">
						<h2>The Witch Queen</h2>
						<p>Witch Queen is a tall woman with a slim build. She has pink hair, which is pulled up under her hat, and teal eyes.</p>
					</div>
					<a href="#">Read More</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- news section end -->
@endsection()