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
                        <th scope='col'>ID</th>
                        <th scope='col'>THEATRE NAME</th>
                        <th scope='col'>REGION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $theatres as $theatre)
                    <tr>
                        <th scope='row'> {{ $theatre->theatreID }}</th>
                        <td>{{ $theatre->theatre_name }}</td>
                        <td>{{ $theatre->region_name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

</x-app-layout>