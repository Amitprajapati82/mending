@extends('layout.app')

@section('content')


<main id="main" class="main">
    <div class="pagetitle">
        <h1>Category</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item">Category</li>
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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                            <i class="bi bi-plus"></i> Add New Category
                        </button>
                    </div>
                </div>


                    <div class="card-body">
                        <!-- Table with hoverable rows -->
                        <div class="table-responsive">
                        <table id="tableData" class="table table-striped table-hover" style="width:100%">
                              <thead class="table-dark">
                                  <tr>
                                      <th>Sr.no.</th>
                                      <th>Category Name</th>
                                      <th>Description</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <!-- Data will be populated by DataTables -->
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


<!-- Add Category Modal -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addCategoryModalLabel">Add New Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="addCategoryForm">
          <div class="mb-3">
            <label for="categoryName" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="categoryName" name="name" placeholder="Enter category name" required>
          </div>
          <div class="mb-3">
            <label for="categoryDescription" class="form-label">Description</label>
            <textarea class="form-control" id="categoryDescription" name="description" placeholder="Enter category description" rows="3"></textarea>
          </div>
          <!-- Add more form fields if needed -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="saveCategoryButton">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Edit Category Modal -->
<div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editCategoryModalLabel">Edit Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="editCategoryForm">
          <input type="hidden" id="editCategoryId" name="editCategoryId">
          <div class="mb-3">
            <label for="editCategoryName" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="editCategoryName" name="editCategoryName" placeholder="Enter category name" required>
          </div>
          <div class="mb-3">
            <label for="editCategoryDescription" class="form-label">Description</label>
            <textarea class="form-control" id="editCategoryDescription" name="editCategoryDescription" placeholder="Enter category description" rows="3"></textarea>
          </div>
          <!-- Add more form fields if needed -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="updateCategoryButton">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- End Edit Modal -->

<script src="{{asset('assets/js/category.js')}}"></script>

@endsection