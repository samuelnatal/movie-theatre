@extends('layouts.app2')
@section('content')
<!-- transformers area start -->
<section class="transformers-area">
	<div class="container">
		<div class="transformers-box">
			<div class="row flexbox-center">
				<div class="col-lg-5 text-lg-left text-center">
					<div class="transformers-content">
						<img style='height:530px; width:400px;' src="{{ Storage::url($movie->image) }}" alt="about" />
					</div>
				</div>
				<div class="col-lg-7">
					<div class="transformers-content">
						<h2>{{ $movie->title }}</h2>
						<p></p>
						<ul>
							<li>
								<div class="transformers-left">
									Genre:
								</div>
								<div class="transformers-right">
									<a href="#">{{ $movie->genre_name }}</a>
								</div>
							</li>
							<li>
								<div class="transformers-left">
									Writer:
								</div>
								<div class="transformers-right">
									{{ $movie->writter }}
								</div>
							</li>
							<li>
								<div class="transformers-left">
									Director:
								</div>
								<div class="transformers-right">
									{{ $movie->director }}
								</div>
							</li>
							<li>
								<div class="transformers-left">
									Duration:
								</div>
								<div class="transformers-right">
									{{ $movie->duration }}
								</div>
							</li>
							<li>
								<div class="transformers-left">
									Release:
								</div>
								<div class="transformers-right">
									{{ $movie->released }}
								</div>
							</li>
							<li>
								<div class="transformers-left">
									Language:
								</div>
								<div class="transformers-right">
									{{ $movie->language }}
								</div>
							</li>
							<li>
								<div class="transformers-left">
									Cinema:
								</div>
								<div class="transformers-right">
									<ul>
										<li><label class='cinema-btn'>Region:</label>{{ $movie->region_name }}</li>
										<li><label class='cinema-btn'>Theatre:</label>{{ $movie->theatre_name }}</li>
										<li><label class='cinema-btn'>Screen:</label> {{ $movie->screen_name }}</li>
										<li><label class='cinema-btn'>Show time:</label>{{ $movie->show_time }}</li>
									</ul>

								</div>
							</li>
							<li>
								<div class="transformers-left">
									Price:
								</div>
								<div class="transformers-right">
									<a href="#"><i class="icofont icofont-dollar"></i>$ {{ $movie->price }}</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<a href="#" class="theme-btn synopsis-tkt-btn" data-scheduleID="{{ $movie->scheduleID }}" data-mvName="{{ $movie->title }}" data-mvPrice="{{ $movie->price }}"><i class="icofont icofont-ticket"></i> BUY TICKET</a>
		</div>
	</div>
</section>
<!-- transformers area end -->

<!-- details area start -->
<section class="details-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="details-content">
					<div class="details-overview">
						<h2>Overview</h2>
						<p>{{ $movie->overview }}</p>
					</div>
					<div class="details-reply">
						<h2>Leave a Reply</h2>
						<form action="#">
							<div class="row">
								<div class="col-lg-4">
									<div class="select-container">
										<input type="text" placeholder="Name" />
										<i class="icofont icofont-ui-user"></i>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="select-container">
										<input type="text" placeholder="Email" />
										<i class="icofont icofont-envelope"></i>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="select-container">
										<input type="text" placeholder="Phone" />
										<i class="icofont icofont-phone"></i>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="textarea-container">
										<textarea placeholder="Type Here Message"></textarea>
										<button><i class="icofont icofont-send-mail"></i></button>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="details-comment">
						<a class="theme-btn theme-btn2" href="#">Post Comment</a>
						<p>You may use these HTML tags and attributes: You may use these HTML tags and attributes: You may use these HTML tags and attributes: </p>
					</div>
					<div class="details-thumb">
						<div class="details-thumb-prev">
							<div class="thumb-icon">
								<i class="icofont icofont-simple-left"></i>
							</div>
							<div class="thumb-text">
								<h4>Previous Post</h4>
								<p>Standard Post With Gallery</p>
							</div>
						</div>
						<div class="details-thumb-next">
							<div class="thumb-text">
								<h4>Next Post</h4>
								<p>Standard Post With Preview Image</p>
							</div>
							<div class="thumb-icon">
								<i class="icofont icofont-simple-right"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 text-center text-lg-left">
				<div class="portfolio-sidebar">
					<img src="img/sidebar/sidebar1.webp" alt="sidebar" />
					<img src="img/sidebar/sidebar2.webp" alt="sidebar" />
					<img src="img/sidebar/sidebar4.webp" alt="sidebar" />
				</div>
			</div>
		</div>
	</div>
</section>
<!-- details area end -->

@endsection