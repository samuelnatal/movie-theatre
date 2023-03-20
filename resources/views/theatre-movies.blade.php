@extends('layouts.app2')
@section('content')
<!-- breadcrumb area start -->
<!-- portfolio section start -->
<section class="portfolio-area pt-90">
    <div class="container">
        <div class="row flexbox-center">
            <div class="col-lg-12 text-center text-lg-left">
                <div class="section-title">
                    <h2><i class="icofont icofont-movie"></i> List of movies scheduled at {{ $name }} theatre, {{ $region }}.</h2>
                </div>
            </div>
        </div>
        <hr />
        <div class="row portfolio-item">


            @foreach ($movies as $movie)
            <div class="col-lg-3 col-md-4 col-sm-6 thisweek ">
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

        </div>


    </div>
</section>
<!-- portfolio section end -->
@endsection