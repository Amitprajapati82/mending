@extends('layout.app')

@section('content')


<main id="main" class="main">
    <div class="pagetitle">
        <h1>Customers Orders</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item">Customer Order</li>
                <!-- <li class="breadcrumb-item active">General</li> -->
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-0">

                <!-- <div class="card-header py-2">
                    <div class="d-flex justify-content-end align-items-center">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addBrandModal">
                            <i class="bi bi-plus"></i> Add New Brand
                        </button>
                    </div>
                </div> -->


                    <div class="card-body">
                        <!-- Table with hoverable rows -->
                        <div class="table-responsive mt-3">
                            <table id="tableData" class="table table-striped table-hover mt-2" style="width:100%">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Sr.no.</th>
                                        <th class="text-center">Brand Name</th>
                                        <th>Model Name</th>
                                        <th>Issue Name</th>
                                        <th>Customer Name</th>
                                        <th>Customer Phone</th>
                                        <th>Customer Email</th>
                                        <th>Location</th>
                                        <th>Pincode</th>
                                        <th>Appointment Date</th>
                                        <th>Appointment Slot</th>
                                        <th>Status</th>
                                        <!-- <th>Description</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Table data will be dynamically loaded via AJAX -->
                                </tbody>
                            </table>

                        </div>
                        <!-- End Table with hoverable rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>



<script src="{{asset('assets/js/appointment.js')}}"></script>

@endsection