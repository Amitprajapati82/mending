@extends('layout.app')

@section('content')


<main id="main" class="main">
    <div class="pagetitle">
        <h1>Page</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item">Page</li>
                <li class="breadcrumb-item">Banner</li>
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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addBannerModal">
                            <i class="bi bi-plus"></i> Add New Banner
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
                                        <th>Banner Name</th>
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

<!-- Add Issue Modal -->
<div class="modal fade" id="addBannerModal" tabindex="-1" aria-labelledby="addBannerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addBannerModalLabel">Add New Banner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Banner form fields -->
                <form id="addBannerForm" enctype="multipart/form-data">
                    
                    <div class="mb-3">
                        <label for="bannerTitle" class="form-label">Banner Title</label>
                        <input type="text" class="form-control" id="bannerTitle" name="bannerTitle" placeholder="Enter banner title" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="bannerImage" class="form-label">Upload Image</label>
                        <input type="file" class="form-control" id="bannerImage" name="bannerImage" accept="image/*">
                    </div>

                    <div class="m-3">
                        <img id="imagePreview" src="" alt="Image Preview" class="img-fluid" style="display:none;">
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveBannerButton">Save Banner</button>
            </div>
        </div>
    </div>
</div>




<!-- Edit Modal -->
<!-- Edit Banner Modal -->
<div class="modal fade" id="editBannerModal" tabindex="-1" aria-labelledby="editBannerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editBannerModalLabel">Edit Banner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Edit Banner Form -->
                <form id="editBannerForm" enctype="multipart/form-data">
                    <input type="hidden" id="editBannerId" name="bannerId">
                    
                    <div class="mb-3">
                        <label for="editBannerTitle" class="form-label">Banner Title</label>
                        <input type="text" class="form-control" id="editBannerTitle" name="bannerTitle" placeholder="Enter banner title" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="editBannerImage" class="form-label">Upload New Image (Optional)</label>
                        <input type="file" class="form-control" id="editBannerImage" name="bannerImage" accept="image/*">
                    </div>

                    <div class="mb-3">
                        <img id="editImagePreview" src="" alt="Image Preview" class="img-fluid" style="display:none; width: 100px; height: auto;">
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="updateBannerButton">Update Banner</button>
            </div>
        </div>
    </div>
</div>




<!-- End Edit Modal -->
<script src="{{asset('assets/js/Page/banner.js')}}"></script>

@endsection