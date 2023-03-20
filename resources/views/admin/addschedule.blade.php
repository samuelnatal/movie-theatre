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
                            <h3 class="block-title">Add schedule</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">

                            <form method="post" action="/schedules" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">
                                    <label class="col-12" for="register1-password">Movie:</label>
                                    <div class="col-12">
                                        <select type="text" class="form-control" name="movie" required='true'>
                                            <option value='' disable selected hidden>Select movie..</option>
                                            {{$i = 1;}}
                                            @foreach ($movies as $movie)
                                            <option value='{{$movie->movieID}}'> {{$i++ .'. ' .$movie->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12" for="register1-password">Region:</label>
                                    <div class="col-12">
                                        <select id='region' type="text" class="form-control" name="region" required='true'>
                                            <option value='' disable selected hidden>Select region..</option>
                                            <option value='1'>1. Dar es Salaam</option>
                                            <option value='2'>2. Mwanza</option>
                                            <option value='3'>3. Arusha</option>
                                            <option value='4'>4. Morogoro</option>
                                            <option value='5'>5. Dodoma</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12" for="register1-password">Theatre:</label>
                                    <div class="col-12">
                                        <select type="text" class="form-control" name="theatre" required='true'>
                                            <option value='' disable selected hidden>Select theatre..</option>
                                            <option value='1' class='dar'>1. Posta, AgaKhan Road MP</option>
                                            <option value='2' class='dar'>2. Kigamboni, Vijibweni MP</option>
                                            <option value='3' class='dar'>3. Kinondoni, Biafra Road MP</option>
                                            <option value='4' id='mwz' style='display:none'>4. Mwanza, Sahara MP</option>
                                            <option value='5' id='ara' style='display:none'>5. Arusha, Kaloleni MP</option>
                                            <option value='6' id='mor' style='display:none'>6. Morogoro, Boma MP</option>
                                            <option value='7' id='dom' style='display:none'>7. Dodoma, Chamwino MP</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12" for="register1-password">Screen:</label>
                                    <div class="col-12">
                                        <select type="text" class="form-control" name="screen" required='true'>
                                            <option value='' disable selected hidden>Select screen..</option>
                                            <option value='1'>1. 2D</option>
                                            <option value='2'>2. 3D</option>
                                            <option value='3'>3. HFR</option>
                                            <option value='4'>4. IMAX</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12" for="register1-password">Show time:</label>
                                    <div class="col-12">
                                        <input type="datetime-local" class="form-control" name="time" value="" required='true'>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12" for="register1-password">Price:</label>
                                    <div class="col-12">
                                        <input type="number" class="form-control" placeholder="$ 0.00" name="price" value="" step=".01" required='true'>
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