@extends('layout.app')

@section('content')


<main id="main" class="main">
    <div class="pagetitle">
        <h1>Device</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item">Device </li>
                <!-- <li class="breadcrumb-item active">General</li> -->
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-0">

                <div class="card-header py-2">
                    <div class="d-flex justify-content-end align-items-center">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDeviceModal">
                            <i class="bi bi-plus"></i> Add New Device
                        </button>
                    </div>
                </div>


                    <div class="card-body">
                        <!-- Table with hoverable rows -->
                        <div class="table-responsive">
                        <table id="tableData" class="table  table-striped table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sr.no.</th>
                                    <th>Category</th>
                                    <th>Brand</th>
                                    <th>Device Image</th>
                                    <th>Device Name</th>
                                    <th>Model</th>
                                    <th>Serial Number</th>
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

<!-- Add Device Modal -->
<div class="modal fade" id="addDeviceModal" tabindex="-1" aria-labelledby="addDeviceModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addDeviceModalLabel">Add New Device</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Device form fields -->
        <form id="addDeviceForm">
          <!-- <div class="mb-3">
            <label for="customerSelect" class="form-label">Customer</label>
            <select class="form-select" id="customerSelect" name="customer_id" required>
              <option value="" disabled selected>Select Customer</option>
              
            </select>
          </div> -->
          <div class="mb-3">
            <label for="categorySelect" class="form-label">Category</label>
            <select class="form-select" id="categorySelect" name="category_id" required>
              <option value="" disabled selected>Select Category</option>
              @foreach ($category as $items)
              <option value="{{$items->id}}" >{{$items->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="brandSelect" class="form-label">Brand</label>
            <select class="form-select" id="brandSelect" name="brand_id" required>
            <option value="" disabled selected>Select Brand</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="deviceImage" class="form-label">Device Image</label>
            <input type="file" class="form-control" id="deviceImage" name="deviceImage" accept="image/*" required>
          </div>
          <div class="mb-3">
            <img id="imagePreview" src="" alt="Image Preview" style="max-width: 100%; display: none;"/>
          </div>
          <div class="mb-3">
            <label for="deviceName" class="form-label">Device Name</label>
            <input type="text" class="form-control" id="deviceName" name="deviceName" placeholder="Enter device name" required>
          </div>
          <div class="mb-3">
            <label for="deviceModel" class="form-label">Model</label>
            <input type="text" class="form-control" id="deviceModel" name="deviceModel" placeholder="Enter device model" required>
          </div>
          <div class="mb-3">
            <label for="deviceSerialNumber" class="form-label">Serial Number</label>
            <input type="text" class="form-control" id="deviceSerialNumber" name="deviceSerialNumber" placeholder="Enter serial number" required>
          </div>
          <!-- Add more form fields as needed -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="saveDeviceButton">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- Edit Modal -->
<div class="modal fade" id="editDeviceModal" tabindex="-1" aria-labelledby="editDeviceModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editDeviceModalLabel">Edit Device</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Device form fields -->
        <form id="editDeviceForm">
          <input type="hidden" id="editDeviceId" name="id"> <!-- Hidden field to hold device ID -->
          <div class="mb-3">
            <label for="editCategorySelect" class="form-label">Category</label>
            <select class="form-select" id="editCategorySelect" name="category_id" required>
              <option value="" disabled>Select Category</option>
              
            </select>
          </div>
          <div class="mb-3">
            <label for="editBrandSelect" class="form-label">Brand</label>
            <select class="form-select" id="editBrandSelect" name="brand_id" required>
              <option value="" disabled>Select Brand</option>
              <!-- Brands will be populated dynamically based on category selection -->
            </select>
          </div>
          <div class="mb-3">
            <label for="editDeviceImage" class="form-label">Device Image</label>
            <input type="file" class="form-control" id="editDeviceImage" name="editDeviceImage" accept="image/*">
            <img id="editImagePreview" src="" alt="Image Preview" width="100" style="display:none; margin-top: 10px;">
          </div>
          <div class="mb-3">
            <label for="editDeviceName" class="form-label">Device Name</label>
            <input type="text" class="form-control" id="editDeviceName" name="editDeviceName" placeholder="Enter device name" required>
          </div>
          <div class="mb-3">
            <label for="editDeviceModel" class="form-label">Model</label>
            <input type="text" class="form-control" id="editDeviceModel" name="editDeviceModel" placeholder="Enter device model" required>
          </div>
          <div class="mb-3">
            <label for="editDeviceSerialNumber" class="form-label">Serial Number</label>
            <input type="text" class="form-control" id="editDeviceSerialNumber" name="editDeviceSerialNumber" placeholder="Enter serial number" required>
          </div>
          <!-- Add more form fields as needed -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="updateDeviceButton">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- End Edit Modal -->
<script src="{{asset('assets/js/device.js')}}"></script>

@endsection