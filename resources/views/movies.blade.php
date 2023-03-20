@extends('layouts.app2')
@section('content')
<!-- breadcrumb area start -->
<!-- portfolio section start -->
<section class="portfolio-area pt-90">
	<div class="container">
		<div class="row flexbox-center">
			<div class="col-lg-3 text-center text-lg-left">
				<div class="section-title">
					<h1><i class="icofont icofont-movie"></i> Movies list</h1>
				</div>
			</div>
			<div class="col-lg-9 text-center text-lg-right">
				<div class="portfolio-menu">
					<ul>
						<li data-filter=".all" class="active">All</li>
						<li data-filter=".thisweek">This week</li>
						<li data-filter=".future">Upcoming</li>
						<li data-filter=".dar">Dar es Salaam</li>
						<li data-filter=".mwz">Mwanza</li>
						<li data-filter=".aru">Arusha</li>
						<li data-filter=".mor">Morogoro</li>
						<li data-filter=".dom">Dodoma</li>
					</ul>
				</div>
			</div>
		</div>
		<hr />
		<div class="row portfolio-item">

			@foreach ($weekmovies as $weekmovie)
			<div class="col-lg-3 col-md-4 col-sm-6 thisweek ">
				<a href="/synopsis?movieID={{ $weekmovie->movieID }}">
					<div class="single-portfolio">
						<div class="single-portfolio-img">
							<img style="height:350px" src="{{ Storage::url($weekmovie->image) }}" alt="portfolio" />
							<a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
								<i class="icofont icofont-ui-play"></i>
							</a>
						</div>
						<div class="portfolio-content">
							<h2>{{ $weekmovie->title }}</h2>
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

			@foreach ($movies as $movie)
			<div class="col-lg-3 col-md-4 col-sm-6 all ">
				<a href="/synopsis?movieID={{ $movie->movieID }}">
					<div class="single-portfolio">
						<div class="single-portfolio-img">
							<img style="height:350px" src="{{ Storage::url($movie->image) }}" alt="portfolio" />
							<a href="{{ $movie->trailer }}" class="popup-youtube">
								<i class="icofont icofont-ui-play"></i>
							</a>
						</div>
						<div class="portfolio-content">
							<h2>{{ $movie->title }}</h2>
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

			@foreach ( $futuremovies as $futuremovie )
			<div class="col-lg-3 col-md-4 col-sm-6 future ">
				<a href="/synopsis?movieID={{ $futuremovie->movieID }}">
					<div class="single-portfolio">
						<div class="single-portfolio-img">
							<img style="height:350px" src="{{ Storage::url($futuremovie->image) }}" alt="portfolio" />
							<a href="{{ $futuremovie->trailer }}" class="popup-youtube">
								<i class="icofont icofont-ui-play"></i>
							</a>
						</div>
						<div class="portfolio-content">
							<h2>{{ $futuremovie->title }}</h2>
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

			@foreach ( $darmovies as $darmovie )
			<div class="col-lg-3 col-md-4 col-sm-6 dar ">
				<a href="/synopsis?movieID={{ $darmovie->movieID }}">
					<div class="single-portfolio">
						<div class="single-portfolio-img">
							<img style="height:350px" src="{{ Storage::url($darmovie->image) }}" alt="portfolio" />
							<a href="{{ $darmovie->trailer }}" class="popup-youtube">
								<i class="icofont icofont-ui-play"></i>
							</a>
						</div>
						<div class="portfolio-content">
							<h2>{{ $darmovie->title }}</h2>
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

			@foreach ( $mwzmovies as $mwzmovie )
			<div class="col-lg-3 col-md-4 col-sm-6 mwz ">
				<a href="/synopsis?movieID={{ $mwzmovie->movieID }}">
					<div class="single-portfolio">
						<div class="single-portfolio-img">
							<img style="height:350px" src="{{ Storage::url($mwzmovie->image) }}" alt="portfolio" />
							<a href="{{ $mwzmovie->trailer }}" class="popup-youtube">
								<i class="icofont icofont-ui-play"></i>
							</a>
						</div>
						<div class="portfolio-content">
							<h2>{{ $mwzmovie->title }}</h2>
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

			@foreach ( $mormovies as $mormovie )
			<div class="col-lg-3 col-md-4 col-sm-6 mor ">
				<a href="/synopsis?movieID={{ $mormovie->movieID }}">
					<div class="single-portfolio">
						<div class="single-portfolio-img">
							<img style="height:350px" src="{{ Storage::url($mormovie->image) }}" alt="portfolio" />
							<a href="{{ $mormovie->trailer }}" class="popup-youtube">
								<i class="icofont icofont-ui-play"></i>
							</a>
						</div>
						<div class="portfolio-content">
							<h2>{{ $mormovie->title }}</h2>
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

			@foreach ( $arumovies as $arumovie )
			<div class="col-lg-3 col-md-4 col-sm-6 aru ">
				<a href="/synopsis?movieID={{ $arumovie->movieID }}">
					<div class="single-portfolio">
						<div class="single-portfolio-img">
							<img style="height:350px" src="{{ Storage::url($arumovie->image) }}" alt="portfolio" />
							<a href="{{ $arumovie->trailer }}" class="popup-youtube">
								<i class="icofont icofont-ui-play"></i>
							</a>
						</div>
						<div class="portfolio-content">
							<h2>{{ $arumovie->title }}</h2>
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

			@foreach ( $dommovies as $dommovie )
			<div class="col-lg-3 col-md-4 col-sm-6 dom ">
				<a href="/synopsis?movieID={{ $dommovie->movieID }}">
					<div class="single-portfolio">
						<div class="single-portfolio-img">
							<img style="height:350px" src="{{ Storage::url($dommovie->image) }}" alt="portfolio" />
							<a href="{{ $dommovie->trailer }}" class="popup-youtube">
								<i class="icofont icofont-ui-play"></i>
							</a>
						</div>
						<div class="portfolio-content">
							<h2>{{ $dommovie->title }}</h2>
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
</section>
<!-- portfolio section end -->
@endsection