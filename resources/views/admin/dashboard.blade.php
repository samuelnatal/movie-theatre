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
            <div class="row gutters-tiny invisible" data-toggle="appear">
                <!-- Row #1 -->
                <div class="col-6 col-md-4 col-xl-4">
                    <a class="block text-center dash-card-link" href="{{ url('/transactions') }}">
                        <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left  dash-card">
                            <div class="ribbon-box">{{ $transactions_total_num }}</div>
                            <p style="margin-top: 11%">
                                <img style="width: 25%; position:relative; left:35%;" src="assets/img/icons/icons8-transaction-94.png" alt="" />
                            </p>
                            <p class="font-w600">
                                Transactions
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-xl-4">
                    <a class="block text-center dash-card-link" href="{{ url('/theatres') }}">
                        <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left dash-card">
                            <div class="ribbon-box">{{ $theatreas_total_num }}</div>
                            <p style="margin-top: 11%">
                            <img style="width: 25%; position:relative; left:35%;" src="assets/img/icons/icons8-movie-theater-96.png" alt="" />
                            </p>
                            <p class="font-w600">
                                Theatres
                            </p>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-xl-4">
                    <a class="block text-center dash-card-link" href="{{ url('/available') }}">
                        <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left dash-card">
                            <div class="ribbon-box">{{ $movies_total_num }}</div>
                            <p style="margin-top: 11%">
                                <!-- <i class="si si-target fa-3x text-white-op"></i> -->
                                <img style="width: 25%; position:relative; left:35%;" src="assets/img/icons/icons8-art-64.png" alt="" />
                            </p>
                            <p class="font-w600">
                                Movies
                            </p>
                        </div>
                    </a>
                </div>

                <!-- END Row #1 -->
            </div>
        </div>
        <div class="content">
            <div class="row gutters-tiny invisible" data-toggle="appear">
                <!-- Row #1 -->
                <div class="col-6 col-md-4 col-xl-4 ">
                    <a class="block text-center dash-card-link" href="{{ url('/schedules') }}">
                        <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left dash-card">
                            <div class="ribbon-box">{{ $schedules_total_num }}</div>
                            <p style="margin-top: 11%">
                            <img style="width: 25%; position:relative; left:35%;" src="assets/img/icons/icons8-schedule-100.png" alt="" />
                            </p>
                            <p class="font-w600">
                                Movies schedules
                            </p>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-xl-4">
                    <a class="block text-center dash-card-link" href="{{ url('/customers') }}">
                        <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left dash-card">
                            <div class="ribbon-box">{{ $customers_total_num }}</div>
                            <p style="margin-top: 11%">
                            <img style="width: 25%; position:relative; left:35%;" src="assets/img/icons/icons8-customer-100.png" alt="" />
                            </p>
                            <p class="font-w600">
                                Customers
                            </p>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-xl-4 ">
                    <a class="block text-center dash-card-link" href="user.html">
                        <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left dash-card">
                            <div class="ribbon-box">{{ $revenue }}</div>
                            <p style="margin-top: 11%">
                                <!-- <i class="si si-bubbles fa-3x text-white-op"></i> -->
                                <img style="width: 25%; position:relative; left:35%;" src="assets/img/icons/icons8-revenue-64.png" alt="" />
                            </p>
                            <p class="font-w600">
                                Revenues
                            </p>
                        </div>
                    </a>
                </div>

                <!-- END Row #1 -->
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->


</x-app-layout>