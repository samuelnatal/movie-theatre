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

            <!-- Register Forms -->
            <div class="row">
                <div class="col-md-12">
                    <!-- Bootstrap Register -->
                    <div class="block block-themed">
                        <div class="block-header bg-gd-emerald">
                            <h3 class="block-title">Add movie</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">

                            <form method="post" action="/postmovie" enctype="multipart/form-data">

                                @csrf

                                <div class="form-group row">
                                    <label class="col-12" for="register1-password">Title:</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="title" value="" required='true'>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12" for="register1-password">Genre:</label>
                                    <div class="col-12">
                                        <select type="text" class="form-control" name="genre" required='true'>
                                            <option value='' disable selected hidden>Select genre..</option>
                                            {{$i = 1;}}
                                            @foreach ($genres as $genre)
                                            <option value='{{$genre->genreID}}'> {{$i++ .'. ' .$genre->genre_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12" for="register1-password">Writter:</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="writter" value="" required='true'>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12" for="register1-password">Director:</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="director" value="" required='true'>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12" for="register1-password">Duration:</label>
                                    <div class="col-12">
                                        <input type="time" class="form-control" step="1" name="duration" value="" required='true'>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12" for="register1-password">Release:</label>
                                    <div class="col-12">
                                        <input type="date" class="form-control" name="released" value="" required='true'>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12" for="register1-password">Language:</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="language" value="" required='true'>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12" for="register1-password">Overview:</label>
                                    <div class="col-12">
                                        <textarea type="" class="form-control" name="overview" value="" rows="4" required='true'></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12" for="register1-password">Trailer video link:</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="trailer" value="" required='true'>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12" for="register1-password">Image:</label>
                                    <div class="col-12">
                                        <input type="file" class="form-control" name="image" value="" required='true'>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-alt-success" name="submit">
                                            <i class="fa fa-plus mr-5"></i> Add
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- END Bootstrap Register -->
                </div>

            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

</x-app-layout>