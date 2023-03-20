<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <h2 class="content-heading">MANAGE MOVIES</h2>

            <!-- Dynamic Table Full Pagination -->
            <div class="block">
                <div class="block-content block-content-full">

                    <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality initialized in js/pages/be_tables_datatables.js -->

                    <div class="row">
                        @foreach ($movies as $movie)

                        <div class="col-md-3 mt-3">
                            <div class="card text-left" style="box-shadow: 5px 6px 5px 5px #f2f2f2;">
                                
                                    <img style="width: 200px;" class="card-img-top p-3" src="{{ Storage::url($movie->image) }}" alt="">
                                    <div class="card-body p-3">
                                        <h4 class="card-title"><label>Title: </label>{{' '.$movie->title}}</h4>
                                        <h4 class="card-text"><label>Writter:</label>{{' '.$movie->writter}}</h4>
                                        <h4 class="card-text"><label>Director:</label>{{' '.$movie->director}}</h4>
                                        <h4 class="card-text"><label>Duration:</label>{{' '.$movie->duration}}</h4>
                                        <h4 class="card-text"><label>Release:</label>{{' '.$movie->released}}</h4>
                                        <h4 class="card-text"><label>Language:</label>{{' '.$movie->language}}</h4>
                                        <h4 class="card-text"><label>Overview:</label>{{' '.$movie->overview}}</h4>
                                        <hr class="m-5 border-5 border-dark"/>
                                        <a href="/edit?id={{$movie->movieID}}" >
                                        <button class="btn btn-primary m-5">Edit</button>
                                        </a>

                                        <a href='/destroy-movie?movieID={{$movie->movieID}}'>
                                        <button class="btn btn-danger m-5">Delete</button>
                                        </a>
                                    </div>
                              
                            </div>
                        </div>

                        @endforeach

                    </div>

                </div>
            </div>
            <!-- END Dynamic Table Full Pagination -->

            <!-- END Dynamic Table Simple -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

</x-app-layout>