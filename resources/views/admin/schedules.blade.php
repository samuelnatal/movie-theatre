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
            <table class='table table-striped'>
                <thead class='thead-dark bg-secondary'>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Movie</th>
                        <th scope='col'>Region</th>
                        <th scope='col'>Theatre</th>
                        <th scope='col'>Screen</th>
                        <th scope='col'>Time</th>
                        <th scope='col'>Price</th>
                        <th scope='col'>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{ $i = 1; }}
                    @foreach ( $schedules as $schedule)
                    <tr>
                        <th scope='row'>{{ $i++ }}</th>
                        <td>{{$schedule->title}}</td>
                        <td>{{$schedule->region_name}}</td>
                        <td>{{$schedule->theatre_name}}</td>
                        <td>{{$schedule->screen_name}}</td>
                        <td>{{$schedule->show_time}}</td>
                        <td><span style="color:green; font-weight:bolder;">$</span> {{$schedule->price}}</td>
                        <td>
                            <a href='/schedules/{{$schedule->scheduleID}}/edit?scheduleID={{$schedule->scheduleID}}'>
                                <button class='btn btn-primary m-5'>Edit</button>
                            </a>

                            <a href='/destroy-schedule?scheduleID={{$schedule->scheduleID}}'>
                            <button class='btn btn-danger m-5'>Delete</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

</x-app-layout>