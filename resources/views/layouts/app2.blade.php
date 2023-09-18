<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Moviepoint - Online Movie,Vedio and TV Show HTML Template</title>
	<!-- Favicon Icon -->
	<link rel="icon" type="image/webp" href="img/favcion.webp" />
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/old.bootstrap.min.css" media="all" />
	<!-- Slick nav CSS -->
	<link rel="stylesheet" type="text/css" href="css/slicknav.min.css" media="all" />
	<!-- Iconfont CSS -->
	<link rel="stylesheet" type="text/css" href="css/icofont.css" media="all" />
	<!-- Owl carousel CSS -->
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<!-- Popup CSS -->
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
	<!-- Main style CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
	<!-- Responsive CSS -->
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="all" />
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	<script src="https://www.paypal.com/sdk/js?client-id=AYZEPyvVfKL7CxchT6JRy2SnQHEBNySi81n0KeKAoTcIfX7y6V9eCNp_UV7HfTU_eyokbvDVkxC3L_wO&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>

	<style>
		.hero-area-content img {
			transition-duration: 0.9s;
			transition-timing-function: ease;
			transition-delay: 0s;
			transition-property: all;
		}

		.hero-area-content img:hover {
			transform: scale(1.05);
		}

		.slider-big-img {
			height: 550px;
		}

		.cinema-btn {
			width: 150px;
		}

		.region-desc-p {
			margin-top: 3%;
			font-size: larger;
			color: #fff;
		}

		.theatre-dv {
			height: 200px;
		}

		.theatre-dv p {
			margin: 1% 0;
		}

		.theatre-dv ul {
			all: unset;
		}

		.theatre-dv a {
			text-decoration: underline;
		}

		.theatre-dv a:hover {
			color: #eb315a;
		}

		.seat-btn {
			/* background-color: #dfe0e2 !important; */
			width: 20px !important;
			height: 20px;
			border-radius: 50%;
			padding: 0 !important;
			border: none;
		}

		.seat-btn:hover {
			background-color: black !important;
		}

		#book-btn {
			color: #fff;
			background-color: darkgrey;
		}

		#book-btn:hover {
			color: #eb315a;
			cursor: not-allowed;
			background-color: #eb315a;
		}

		/* Media query for small screens (up to 576px) */
		@media (max-width: 576px) {
			.col-xs-12 {
				flex: 0 0 100% !important;
				max-width: 100% !important;
				margin-bottom: 3%;
			}

			.text-center {
				text-align: left !important;
			}


			.hero-area-slide {
				margin-top: 80px !important;
			}

			.owl-stage-outer {
				height: 500px;
				overflow: visible !important;
			}

			.slider-big-img {
				height: 400px !important;
			}
		}
	</style>
</head>

<body>
	<!-- Page loader -->
	<div id="preloader"></div>
	<!-- header section start -->
	<header class="header">
		<div class="container">
			<div class="header-area">
				<div class="logo">
					<a href="{{ url('/') }}"><img src="img/logo.webp" alt="logo" /></a>
				</div>

				<div class="menu-area">
					<div class="responsive-menu"></div>
					<div class="mainmenu">
						<ul id="primary-menu">
							<li><a class="active" href="/">Home</a></li>
							<li><a href="{{ url('/movies') }}">Movies</a></li>
							<li><a href="/blog">News</a></li>
							<li><a href="#">Regions<i class="icofont icofont-simple-down"></i></a>
								<ul>
									<li><a href="/region?regID=1">Dar es Salaam</a></li>
									<li><a href="/region?regID=2">Mwanza</a></li>
									<li><a href="/region?regID=3">Arusha</a></li>
									<li><a href="/region?regID=4">Morogoro</a></li>
									<li><a href="/region?regID=5">Dodoma</a></li>
								</ul>
							</li>
							<li>
								<div class="header-right">
									<form action="/search" method="get">
										<input type="search" name="search" value="" />
										<button type="submit"><i class="icofont icofont-search"></i></button>
									</form>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="login-area">
		<div class="login-box">
			<a href="#"><i class="icofont icofont-close"></i></a>
			<h2>LOGIN</h2>
			<form action="#">
				<h6>USERNAME OR EMAIL ADDRESS</h6>
				<input type="text" />
				<h6>PASSWORD</h6>
				<input type="text" />
				<div class="login-remember">
					<input type="checkbox" />
					<span>Remember Me</span>
				</div>
				<div class="login-signup">
					<span>SIGNUP</span>
				</div>
				<a href="#" class="theme-btn">LOG IN</a>
				<span>Or Via Social</span>
				<div class="login-social">
					<a href="#"><i class="icofont icofont-social-facebook"></i></a>
					<a href="#"><i class="icofont icofont-social-twitter"></i></a>
					<a href="#"><i class="icofont icofont-social-linkedin"></i></a>
					<a href="#"><i class="icofont icofont-social-google-plus"></i></a>
					<a href="#"><i class="icofont icofont-camera"></i></a>
				</div>
			</form>

		</div>
	</div>

	<div class="buy-ticket">
		<div class="container">
			<div class="buy-ticket-area">
				<a href="#"><i class="icofont icofont-close"></i></a>
				<div class="row">
					<div class="col-lg-8">
						<div class="buy-ticket-box">
							<h4>Buy Tickets</h4>
							<h5 id="st">Seat</h5>
							<h6>Screen</h6>
							<div class="ticket-box-table">
								@for( $a=0, $seatID=1; $a < 3; $a++) <table class="ticket-table-seat">
									@for( $b=0; $b < 5; $b++) <tr>
										@for( $c=0; $c < 7; $c++) <td>
											<button class="seat-btn" type="submit" style="background-color:#dfe0e2;">{{ $seatID++ }}</button>
											</td>
											@endfor
											</tr>
											@endfor
											</table>
											@endfor
							</div>

							<div class="ticket-box-available">
								<button class="seat-btn" style="background-color:#dfe0e2 !important">1</button>
								<span>= Available</span>
								<button class="seat-btn" style="background-color:red !important">1</button>
								<span>= Booked</span>
								<button class="seat-btn" style="background-color:black !important">1</button>
								<span>= Selected</span>

								<div class="container mt-4">
									<table class='table table-striped'>
										<thead class='thead-dark bg-secondary'>
											<th scope='col'>Movie</th>
											<th scope='col'>Seats</th>
											<th scope='col'>Price</th>
											<th scope='col'>Tax</th>
											<th scope='col'>Total</th>
										</thead>
										<tbody>
											<tr>
												<td id="td-title">Title</td>
												<td id="td-seats">0</td>
												<td id="td-price">7.80</td>
												<td>$ 1.50</td>
												<td id="td-ttlprice">12.80</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 offset-lg-1">
						<div class="buy-ticket-box mtr-30">
							<h4>Your Information</h4>
							<form method="post" action="/book" enctype="multipart/form-data">
								@csrf

								<div class="form-group row">
									<label class="col-12" for="register1-password">Full name:</label>
									<div class="col-12">
										<input type="text" class="form-control" name="name" value="" required='true'>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-12" for="register1-password">Email:</label>
									<div class="col-12">
										<input type="email" class="form-control" name="email" value="" required='true'>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-12" for="register1-password">Phone:</label>
									<div class="col-12">
										<input type="phone" class="form-control" name="phone" value="" required='true'>
									</div>
								</div>

								<hr style="margin:10%;" />

								<!-- <div class="form-group row">
									<label class="col-12" for="register1-password">Payment method:</label>
									<div class="col-12">
										<input type="radio" name="method" value="Paypal" required='true'>
										<label for="register1-password">Paypal</label>
									</div>
									<div class="col-12">
										<input type="radio" name="method" value="Vodacom" required='true'>
										<label for="register1-password">Vodacom</label>
									</div>
								</div> -->

								<!-- PAYPAL BUTTON -->

								<div id="smart-button-container">
									<div style="text-align: center;">
										<div id="paypal-button-container"></div>
									</div>
								</div>


								<input type="hidden" class="form-control" id="sts" name="seats" value="" required='true'>
								<input type="hidden" class="form-control" id="schedule-id" name="scheduleID" value="" required='true'>
								<input type="hidden" class="form-control" id="ttl-price" name="amount" value="" required='true'>

								<div class="form-group row">
									<div class="col-12">
										<button type="submit" href="#" class="theme-btn w-100" id="book-btn" disabled>Pay to continue</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- header section end -->

	@yield('content')

	<!-- footer section start -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="widget">
						<img src="img/logo.webp" alt="about" />
						<p>Singida, Singida Tanzania</p>
						<h6><span>Call us: </span>(+255) 767 952 016</h6>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="widget">
						<h4>Legal</h4>
						<ul>
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Security</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="widget">
						<h4>Account</h4>
						<ul>
							<li><a href="#">My Account</a></li>
							<li><a href="#">Watchlist</a></li>
							<li><a href="#">Collections</a></li>
							<li><a href="#">User Guide</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="widget">
						<h4>Newsletter</h4>
						<p>Subscribe to our newsletter system now to get latest news from us.</p>
						<form action="#">
							<input type="text" placeholder="Enter your email.." />
							<button>SUBSCRIBE NOW</button>
						</form>
					</div>
				</div>
			</div>
			<hr />
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 text-center text-lg-left">
						<div class="copyright-content">
							<p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
						</div>
					</div>
					<div class="col-lg-6 text-center text-lg-right">
						<div class="copyright-content">
							<a href="#" class="scrollToTop">
								Back to top<i class="icofont icofont-arrow-up"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- footer section end -->

	<script>
		//Section: Codes for controling all the events when a seat button ic clicked by user.
		var seats = [];
		var stCount = 0;
		const tax = 1.5;
		var price = parseFloat(localStorage.getItem('movie_price'));
		var ttlPrice = (price + tax).toFixed(2);
		document.getElementById("td-price").innerHTML = '$ ' + price;
		document.getElementById("td-title").innerHTML = localStorage.getItem('movie_name');
		document.getElementById("td-ttlprice").innerHTML = '$ ' + ttlPrice;

		for (var i = 0; i < 105; i++) {
			var elm = document.getElementsByClassName("seat-btn")[i];
			elm.addEventListener("click", function() {

				localStorage.setItem('seat', JSON.stringify(seats)); //Intialize seats as an empty ayyar in a local storage

				if (event.target.style.backgroundColor === 'red') {

				} else if (event.target.style.backgroundColor === 'black') {
					stCount--; //Derementing seats number when user deselect a seat
					price = parseFloat(localStorage.getItem('movie_price'));
					ttlPrice = (price + tax).toFixed(2);
					newPrice = (stCount * price).toFixed(2); //Setting new price after reducing number of seats
					newttlPrice = (stCount * ttlPrice).toFixed(2); //Setting new total price after reducing number of seats
					document.getElementById("td-price").innerHTML = '$ ' + newPrice; //Displaying updated price after decrementing seats
					document.getElementById("td-ttlprice").innerHTML = '$ ' + newttlPrice; //Displaying updated total price after decrementing seats

					seats = JSON.parse(localStorage.getItem('seat'));
					seats.pop();
					localStorage.setItem('seat', JSON.stringify(seats));
					event.target.style.backgroundColor = '#dfe0e2';

					document.getElementById("sts").value = seats; //Passing the array to an input type hidden value
					document.getElementById("td-seats").innerHTML = stCount;
					document.getElementById("schedule-id").value = localStorage.getItem('schedule_id'); //Passing the variable value to an input type hidden value
					document.getElementById("ttl-price").value = newttlPrice; //Passing the amount value to an input type hidden value to be sent on a booking form
					localStorage.setItem('amount', newttlPrice);
				} else {
					stCount++; //Incrementing seats number when user deselect a seat
					price = parseFloat(localStorage.getItem('movie_price'));
					ttlPrice = (price + tax).toFixed(2);
					newPrice = (stCount * price).toFixed(2); //Setting new price after adding number of seats
					newttlPrice = (stCount * ttlPrice).toFixed(2); //Setting new total price after adding number of seats
					document.getElementById("td-price").innerHTML = '$ ' + newPrice; //Displaying updated total price after adding seats
					document.getElementById("td-ttlprice").innerHTML = '$ ' + newttlPrice; //Displaying updated total price after adding seats


					seats = JSON.parse(localStorage.getItem('seat'));
					seats.push(event.target.innerHTML);
					localStorage.setItem('seat', JSON.stringify(seats));
					event.target.style.backgroundColor = 'black';

					document.getElementById("sts").value = seats; //Passing the array to an input type hidden value
					document.getElementById("td-seats").innerHTML = stCount; //Passing the array to an input type hidden value
					document.getElementById("schedule-id").value = localStorage.getItem('schedule_id'); //Passing the variable value to an input type hidden value
					document.getElementById("ttl-price").value = newttlPrice; //Passing the amount value to an input type hidden value to be sent on a booking form
					localStorage.setItem('amount', newttlPrice);
				}
			});

		}
		//End section

		//Section: Codes for controling events when user click a buy ticket button at synopsis page
		var elm = document.getElementsByClassName('synopsis-tkt-btn');
		for (var i = 0; i < elm.length; i++) {
			elm[i].addEventListener('click', function() {

				//Get the scheduledID value from the clicked ticket button
				var scheduleID = event.target.getAttribute('data-scheduleID');

				//Start of the ajax call to retrieve all the booked seats and set their background to red
				var xhr = new XMLHttpRequest();

				xhr.open('GET', 'http://localhost:8000/seats?scheduleID=' + scheduleID, true);

				xhr.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						var seats = JSON.parse(this.responseText);
						for (var i = 0; i < 105; i++) {
							var seatID = document.getElementsByClassName("seat-btn")[i].innerHTML;
							for (var ii = 0; ii < seats.length; ii++) {
								if (seatID == seats[ii].seat) {
									document.getElementsByClassName("seat-btn")[i].style.backgroundColor = 'red';
									document.getElementsByClassName("seat-btn")[i].style.cursor = 'not-allowed';
								}

							}

						}
					}
				}

				xhr.onerror = function() {
					console.log('There was a problem fetching data....');
				}

				xhr.send();

				//End of the AJAX codes

				localStorage.setItem('seat', JSON.stringify(seats)); //Intialize seats as an empty ayyar in a local storage
				document.getElementsByClassName('buy-ticket')[0].style.display = 'block';

				localStorage.setItem('seat', JSON.stringify(seats)); //Intialize seats as an empty ayyar in a local storage

				localStorage.setItem('schedule_id', event.target.getAttribute('data-scheduleID'));
				localStorage.setItem('movie_name', event.target.getAttribute('data-mvName'));
				localStorage.setItem('movie_price', event.target.getAttribute('data-mvPrice'));

				document.getElementById("td-price").innerHTML = '$ ' + localStorage.getItem('movie_price');
				document.getElementById("td-title").innerHTML = localStorage.getItem('movie_name');
				document.getElementById("td-ttlprice").innerHTML = '$ ' + (parseFloat(localStorage.getItem('movie_price')) + 1.5);
			});
		}
		//End section

		//Section: Make payment with paypal for booking a seat
		function initPayPalButton() {
			paypal.Buttons({
				style: {
					shape: 'rect',
					color: 'gold',
					layout: 'vertical',
					label: 'paypal',

				},

				createOrder: function(data, actions) {
					return actions.order.create({
						purchase_units: [{
							"amount": {
								"currency_code": "USD",
								"value": parseFloat(localStorage.getItem('amount'))
							}
						}]
					});
				},

				onApprove: function(data, actions) {
					return actions.order.capture().then(function(orderData) {

						// Full available details
						console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

						// Show a success message within this page, e.g.
						const element = document.getElementById('book-btn');
						element.disabled = false;
						element.style.backgroundColor = '#fff';
						element.style.cursor = 'pointer';
						element.style.color = '#eb315a';
						element.innerHTML = 'Continue';

						// Or go to another URL:  actions.redirect('thank_you.html');

					});
				},

				onError: function(err) {
					console.log(err);
				}
			}).render('#paypal-button-container');
		}
		initPayPalButton();
		//End section
	</script>


	<!-- jquery main JS -->
	<script src="js/jquery.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<!-- Slick nav JS -->
	<script src="js/jquery.slicknav.min.js"></script>
	<!-- owl carousel JS -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Popup JS -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- Isotope JS -->
	<script src="js/isotope.pkgd.min.js"></script>
	<!-- main JS -->
	<script src="js/main.js"></script>
	<script src="js/app.js"></script>
</body>

</html>