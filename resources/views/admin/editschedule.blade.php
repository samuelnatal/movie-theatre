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
                            @foreach ($schedules as $schedule)
                            <form method="post" action="/schedules/{{$schedule->scheduleID}}" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                               

                                <div class="form-group row">
                                    <div class="col-12">
                                        <input type="hidden" class="form-control" name="id" value="{{$schedule->scheduleID}}" required='true'>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12" for="register1-password">Movie:</label>
                                    <div class="col-12">
                                        <select type="text" class="form-control" name="movie" required='true'>
                                            <option value='{{ $schedule->movie_id }}' selected hidden>{{ $schedule->title}}</option>
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
                                            <option value='{{ $schedule->region_id}}' selected hidden>{{ $schedule->region_name}}</option>
                                            <option value='1'>1. Dar es Salaam</option>
                                            <option value='2'>2. Mwanza</option>
                                            <option value='3'>3. Arusha</option>
                                            <option value='4'>4. Morogoro</option>
                                            <option value='5'>5. Dodoma</option>
                                        </select>
                                    </div>
                                </div>

                                <script>
                                    document.getElementById("region").addEventListener('change', doSomething);

                                    function doSomething() {
                                        var reg = document.getElementById('region').value;
                                        if (reg == 1) {
                                            var elems = document.getElementsByClassName('dar');
                                            for (var i = 0; i < elems.length; i += 1) {
                                                elems[i].style.display = 'block';
                                            }
                                        }

                                        if (reg == 2)
                                            document.getElementById('mwz').style.display = 'block';

                                        if (reg == 3)
                                            document.getElementById('ara').style.display = 'block';

                                        if (reg == 4)
                                            document.getElementById('mor').style.display = 'block';

                                        if (reg == 5)
                                            document.getElementById('dom').style.display = 'block';

                                    }
                                </script>

                                <div class="form-group row">
                                    <label class="col-12" for="register1-password">Theatre:</label>
                                    <div class="col-12">
                                        <select type="text" class="form-control" name="theatre" required='true'>
                                            <option value='{{ $schedule->theatre_id }}' selected hidden>{{ $schedule->theatre_name}}</option>
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
                                            <option value='{{ $schedule->screen_id }}' selected hidden>{{ $schedule->screen_name}}.</option>
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
                                        <input type="datetime-local" class="form-control" name="time" value="{{ $schedule->show_time}}" required='true'>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-alt-success" name="submit">
                                            <i class="fa fa-plus mr-5"></i> Save
                                        </button>
                                    </div>
                                </div>

                                @endforeach
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