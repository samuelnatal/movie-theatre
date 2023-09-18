@extends('layouts.app2')
@section('content')
<!-- breadcrumb area start -->
<!-- portfolio section start -->
<section class="portfolio-area pt-90">
    <div class="container">
        <div class="row flexbox-center">
            <div class="col-lg-12 text-center text-lg-left">
                <div class="section-title">
                    <h1><i class="icofont icofont-movie"></i> Movie Point (MP) in {{ $name }}</h1>
                </div>
            </div>
        </div>
        <hr />
        <p class="region-desc-p">List of Movie Point (MP) theatres found in {{ $name }} region:</p>
        <div class="row portfolio-item">
            @foreach ($reg as $r)
            <div class="row flexbox-center">
                <div class="col-lg-4 text-center text-lg-left">
                    <div class="section-title">
                        <img src="img/footer-bg.webp" alt="" />
                    </div>
                </div>
                <div class="col-lg-8 text-center text-lg-left theatre-dv">
                    <h2>{{$r->theatre_name}}</h2>
                    <hr />
                    <p>The theatre is located in {{ $r->region_name.' , branded as '.$r->theatre_name }}. The theatre have the following qualities:
                        <ul>
                            <li>Stellar surrounded sound system.</li>
                            <li>Suitable theatre seating inside appropriate room shape and layout.</li>
                            <li>4K ULTRA HD Visuals.</li>
                            <li>Themed decor theatre with perfect lighting levels.</li>
                        </ul>
                    </p>
                    <a href="/theatre-movies?theatreID={{ $r->theatreID }}" >See a list of movies on this theatre >></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- portfolio section end -->
@endsection