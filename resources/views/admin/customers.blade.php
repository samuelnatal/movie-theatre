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
                        <th scope='col'>Name</th>
                        <th scope='col'>Email</th>
                        <th scope='col'>Phone</th>
                        <th scope='col'>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{ $i = 1; }}
                    @foreach ( $customers as $customer)
                    <tr>
                        <th scope='row'>{{ $customer->customerID }}</th>
                        <td>{{$customer->customer_name}}</td>
                        <td>{{$customer->customer_email}}</td>
                        <td>{{$customer->customer_phone}}</td>
                        <td>
                            <a href='/customers/{{$customer->customerID}}/edit?customerID={{$customer->customerID}}'>
                                <button class='btn btn-primary m-5'>Edit</button>
                            </a>

                            <a href='/destroy-customer?customerID={{$customer->customerID}}'>
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