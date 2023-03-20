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
                            <form method="post" action="/customers/{{$customer->customerID}}" enctype="multipart/form-data">
                                @csrf
                                @method('put')


                              

                                <div class="form-group row">
                                    <label class="col-12" for="register1-password">ID:</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="id" value="{{$customer->customerID}}" required='true'>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12" for="register1-password">Name:</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="name" value="{{$customer->customer_name}}" required='true'>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="register1-password">Email:</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="email" value="{{$customer->customer_email}}" required='true'>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12" for="register1-password">Phone:</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="phone" value="{{$customer->customer_phone}}" required='true'>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-alt-success" name="submit">
                                            <i class="fa fa-plus mr-5"></i> Save
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