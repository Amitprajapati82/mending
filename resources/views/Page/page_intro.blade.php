@extends('layout.app')

@section('content')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Page</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item">Page</li>
                <li class="breadcrumb-item">Introduction</li>
                
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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPageIntroModal">
                            <i class="bi bi-plus"></i> Add Introduction
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

<!-- Modal Form for Page Introduction -->
<div class="modal fade" id="addPageIntroModal" tabindex="-1" aria-labelledby="addPageIntroModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPageIntroModalLabel">Add New Page Introduction</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addPageIntroForm" enctype="multipart/form-data">
                    <!-- Title Field -->
                    <div class="mb-3">
                        <label for="pageTitle" class="form-label">Title</label>
                        <input type="text" class="form-control" id="pageTitle" name="pageTitle" placeholder="Enter title" required>
                    </div>
                    
                    <!-- Description Field -->
                    <div class="mb-3">
                        <label for="pageDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="pageDescription" name="pageDescription" rows="3" placeholder="Enter description" required></textarea>
                    </div>
                    
                    <!-- Dynamic Image Upload Field -->
                    <div class="mb-3">
                        <label for="pageImages" class="form-label">Upload Images</label>
                        <div id="imageUploadsContainer">
                            <div class="input-group mb-2">
                                <input type="file" class="form-control" name="pageImages[]" accept="image/*">
                                <button type="button" class="btn btn-danger btn-sm remove-image-upload" style="display: none;">Remove</button>
                            </div>
                        </div>
                        <!-- Button to add more image fields -->
                        <button type="button" id="addImageUpload" class="btn btn-secondary btn-sm">Add More Images</button>
                    </div>
                    
                    <div class="m-3">
                        <img id="imagePreview" src="" alt="Image Preview" class="img-fluid" style="display:none;">
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="savePageIntroButton">Save Page Introduction</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal Form for Updating Page Introduction -->
<div class="modal fade" id="editPageIntroModal" tabindex="-1" aria-labelledby="editPageIntroModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPageIntroModalLabel">Edit Page Introduction</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editPageIntroForm" enctype="multipart/form-data">
                    <input type="hidden" id="editPageIntroId" name="id">
                    
                    <!-- Title Field -->
                    <div class="mb-3">
                        <label for="editPageTitle" class="form-label">Title</label>
                        <input type="text" class="form-control" id="editPageTitle" name="pageTitle" placeholder="Enter title" required>
                    </div>
                    
                    <!-- Description Field -->
                    <div class="mb-3">
                        <label for="editPageDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="editPageDescription" name="pageDescription" rows="3" placeholder="Enter description" required></textarea>
                    </div>
                    
                    <!-- Dynamic Image Upload Field -->
                    <div class="mb-3">
                        <label for="editPageImages" class="form-label">Upload Images</label>
                        <div id="editImageUploadsContainer">
                            <!-- Existing images will be displayed here -->
                        </div>
                        <button type="button" id="editAddImageUpload" class="btn btn-secondary btn-sm">Add More Images</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="updatePageIntroButton">Update Page Introduction</button>
            </div>
        </div>
    </div>
</div>


<script src="{{asset('assets/js/Page/intro.js')}}"></script>

@endsection