@extends('layout.app')

@section('content')


<main id="main" class="main">
    <div class="pagetitle">
        <h1>Brands</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item">Device Brand</li>
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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addBrandModal">
                            <i class="bi bi-plus"></i> Add New Brand
                        </button>
                    </div>
                </div>


                    <div class="card-body">
                        <!-- Table with hoverable rows -->
                        <div class="table-responsive mt-3">
                            <table id="tableData" class="table table-striped table-hover mt-2" style="width:100%">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Sr.no.</th>
                                        <th class="text-center">Category Name</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Description</th>
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

<!-- Modal -->
<div class="modal fade" id="addBrandModal" tabindex="-1" aria-labelledby="addBrandModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addBrandModalLabel">Add New Brand</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="addBrandForm" enctype="multipart/form-data">
          <input type="hidden" id="editCategoryId" name="editCategoryId">
        
          <div class="mb-3">
            <label for="categoryName" class="form-label">Category</label>
            <select class="form-control" name="categoryId" id="categoryId">
              <option value="">--Choose Category--</option>
              @foreach ($category as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
              @endforeach
            </select>
          </div>

          <div class="mb-3">
            <label for="brandName" class="form-label">Brand Name</label>
            <input type="text" class="form-control" id="brandName" name="brandName" placeholder="Enter brand name">
          </div>

          <div class="mb-3">
            <label for="brandImage" class="form-label">Brand Image</label>
            <input type="file" class="form-control" id="brandImage" name="brandImage" accept="image/*">
            <div id="brandImage_preview" class="mt-2"></div>
          </div>
          <div class="mb-3">
            <label for="brandDescription" class="form-label">Brand Description</label>
            <textarea class="form-control" id="BrandDescription" name="BrandDescription" placeholder="Enter Brand description" rows="3"></textarea>
          </div>

          <!-- Add more form fields as needed -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="saveBrandButton">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- Edit Modal -->
<div class="modal fade" id="editBrandModal" tabindex="-1" aria-labelledby="editBrandModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editBrandModalLabel">Edit Brand</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Edit form fields here -->
        <form id="editBrandForm" enctype="multipart/form-data">
        <input type="hidden" id="editBrandId" name="editBrandId">
        <!-- <input type="hidden" id="editBrandId" name="editBrandId"> -->
          <div class="mb-3">
            <label for="editCategoryId" class="form-label">Category</label>
            <select class="form-control" name="editCategoryId" id="editCategoryId">
            
              
            </select>
          </div>

          <div class="mb-3">
            <label for="editBrandName" class="form-label">Brand Name</label>
            <input type="text" class="form-control" name="editBrandName" id="editBrandName">
          </div>

          <div class="mb-3">
            <label for="editBrandImage" class="form-label">Brand Image</label>
            <input type="file" class="form-control" id="editBrandImage" name="editBrandImage" accept="image/*">
            <div id="editBrandImage_preview" class="mt-2"></div>
          </div>

          <div class="mb-3">
            <label for="editBrandDescription" class="form-label">Brand Description</label>
            <textarea class="form-control" id="editBrandDescription" name="editBrandDescription" placeholder="Enter category description" rows="3"></textarea>
          </div>
          <!-- Add more form fields as needed -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="updateBrandButton">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- End Edit Modal -->

<script src="{{asset('assets/js/brand.js')}}"></script>

@endsection