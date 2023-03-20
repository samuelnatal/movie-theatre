@extends('layouts.app2')
@section('content')
<!-- breadcrumb area start -->
<!-- portfolio section start -->
<section class="portfolio-area pt-90">
    <div class="container">
        <div class="row flexbox-center">
            <div class="col-lg-5 text-center text-lg-left">
                <div class="section-title">
                    <h1><i class="icofont icofont-movie"></i> Search results:</h1>
                </div>
            </div>
            <div class="col-lg-7 text-center text-lg-right">
                <div class="portfolio-menu">
                    <ul>
                        <li data-filter=".all" class="active">Movies</li>
                        <li data-filter=".thisweek">Genres</li>
                        <li data-filter=".future">Region</li>
                        <li data-filter=".dar">Theatres</li>
                    </ul>
                </div>
            </div>
        </div>
        <hr />
        <div class="row portfolio-item">

            @foreach ( $results as $result )
            <div class="col-lg-3 col-md-4 col-sm-6 all ">
                <a href="/synopsis?movieID={{ $result->movieID }}">
                    <div class="single-portfolio">
                        <div class="single-portfolio-img">
                            <img style="height:350px" src="{{ Storage::url($result->image) }}" alt="portfolio" />
                            <a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
                                <i class="icofont icofont-ui-play"></i>
                            </a>
                        </div>
                        <div class="portfolio-content">
                            <h2>{{ $result->title }}</h2>
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