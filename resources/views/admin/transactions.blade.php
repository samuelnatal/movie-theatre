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
                        <th scope='col'>CUSTOMER</th>
                        <th scope='col'>AMOUNT</th>
                        <th scope='col'>METHOD</th>
                        <th scope='col'>DATE</th>
                    </tr>
                </thead>
                <tbody>
                    {{ $i = 1; }}
                    @foreach ( $transactions as $transact)
                    <tr>
                        <th scope='row'> {{ $transact->transactionID }}</th>
                        <td>{{ $transact->customer_name }}</td>
                        <td><span style="color:green; font-weight:bolder;">$</span>{{ $transact->amount }}</td>
                        <td>{{ $transact->method }}</td>
                        <td>{{ $transact->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

</x-app-layout>