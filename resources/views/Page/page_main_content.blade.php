@extends('layout.app')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Page</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item">Page</li>
                <li class="breadcrumb-item">Main-Content</li>
                
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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPageMainContentModal">
                            <i class="bi bi-plus"></i> Add Main Content
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
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- DataTables will auto-populate this area -->
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


<!-- Modal Form for Page Main Content -->
<div class="modal fade" id="addPageMainContentModal" tabindex="-1" aria-labelledby="addPageMainContentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPageMainContentModalLabel">Add New Page Main Content</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addPageMainContentForm" enctype="multipart/form-data">

                <!-- <div class="mb-3">
                                <label for="pageName" class="form-label">Page Name</label>
                                <input type="text" class="form-control" id="pageName" name="pageName" placeholder="Enter Name" required>
                            </div> -->
                    <!-- Dynamic Fields Container -->
                    <div id="dynamicFieldsContainer">
                        <!-- Initial Fields -->
                        <div class="dynamic-field mb-4">
                            <div class="mb-3">
                                <label for="pageTitle" class="form-label">Title</label>
                                <input type="text" class="form-control" name="pageTitle[]" placeholder="Enter title" required>
                            </div>
                            <div class="mb-3">
                                <label for="pageDescription" class="form-label">Description</label>
                                <textarea class="form-control" name="pageDescription[]" rows="3" placeholder="Enter description" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="pageImages" class="form-label">Upload Images</label>
                                <div class="input-group mb-2">
                                    <input type="file" class="form-control" name="pageImages[]" accept="image/*">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Button to add more fields -->
                    <!-- <button type="button" id="addMoreFields" class="btn btn-secondary mb-3">Add More Fields</button> -->
                    
                    <!-- Image Preview -->
                    <div class="m-3">
                        <img id="imagePreview" src="" alt="Image Preview" class="img-fluid" style="display:none;">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="savePageMainContentButton">Save Page Main Content</button>
            </div>
        </div>
    </div>
</div>

<!-- edit -->
<div class="modal fade" id="editPageMainContentModal" tabindex="-1" aria-labelledby="editPageMainContentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPageMainContentModalLabel">Edit Page Main Content</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editPageMainContentForm" enctype="multipart/form-data">
                    <!-- Hidden input to store the ID of the item being edited -->
                    <input type="hidden" id="editId" name="id">

                    <!-- Dynamic Fields Container -->
                    <div id="dynamicEditFieldsContainer">
                        <!-- Initial Fields -->
                        <div class="dynamic-field mb-4">
                            <div class="mb-3">
                                <label for="editPageTitle" class="form-label">Title</label>
                                <input type="text" class="form-control" id="editPageTitle" name="editPageTitle" placeholder="Enter title" required>
                            </div>
                            <div class="mb-3">
                                <label for="editPageDescription" class="form-label">Description</label>
                                <textarea class="form-control" id="editPageDescription" name="editPageDescription" rows="3" placeholder="Enter description" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="editPageImages" class="form-label">Upload Images</label>
                                <div class="input-group mb-2">
                                    <input type="file" class="form-control" id="editPageImages" name="editPageImages" accept="image/*">
                                </div>
                            </div>
                            <!-- Image Preview -->
                            <div class="m-3">
                                <img id="editImagePreview" src="" alt="Image Preview" class="img-fluid" style="display:none;">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="updatePageMainContentButton">Update Page Main Content</button>
            </div>
        </div>
    </div>
</div>


<script src="{{asset('assets/js/Page/maincontent.js')}}"></script>

@endsection