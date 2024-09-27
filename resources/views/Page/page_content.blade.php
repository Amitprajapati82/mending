@extends('layout.app')

@section('content')


<main id="main" class="main">
    <div class="pagetitle">
        <h1>Page</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item">Page</li>
                <li class="breadcrumb-item">Content</li>
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
                        <a href="{{asset('admin/page-content/form')}}" class="btn btn-primary">
                            <i class="bi bi-plus"></i> Add Page Content
                        </a>
                    </div>
                </div>



                    <div class="card-body">
                        <!-- Table with hoverable rows -->
                        <div class="table-responsive mt-3">
                            <table id="tableData" class="table table-striped table-hover mt-2" style="width:100%">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Sr.no.</th>
                                        <th>Page Name</th>
                                        <th>Banner</th>
                                        <th>Introduction</th>
                                        <th>Page Title</th>
                                        <th>Meta Title</th>
                                        <th>Meta Description</th>
                                        <th>Meta Keywords</th>
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

<!-- Modal Form for Page Content -->
<div class="modal fade" id="addPageContentModal" tabindex="-1" aria-labelledby="addPageContentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPageContentModalLabel">Add New Page Content</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addPageContentForm" enctype="multipart/form-data">
                    <div class="row">
                        <!-- Column 1 -->
                        <div class="col-md-6">

                        <div class="mb-3">
                                <label for="pageName" class="form-label">Page Name</label>
                                <input type="text" class="form-control" id="pageName" name="pageName" placeholder="Enter Name" required>
                            </div>
                            <!-- Select Banner Dropdown -->
                            <div class="mb-3">
                                <label for="bannerId" class="form-label">Select Banner</label>
                                <select class="form-control" id="bannerId" name="bannerId">
                                <option value="">--Select Banner--</option>
                                    @foreach ($banner as $item)
                                        <option value="{{$item->id}}">{{$item->title}}</option>
                                    @endforeach
                                    <!-- Options will be populated by JavaScript -->
                                </select>
                            </div>

                            <!-- Select Introduction Dropdown -->
                            <div class="mb-3">
                                <label for="introId" class="form-label">Select Introduction</label>
                                <select class="form-control" id="introId" name="introId">
                                <option value="">--Select Introduction--</option>
                                    @foreach ($introduction as $item)
                                        <option value="{{$item->id}}">{{$item->title}}</option>
                                    @endforeach
                                    <!-- Options will be populated by JavaScript -->
                                </select>
                            </div>

                            <!-- Title Field -->
                            <!-- <div class="mb-3">
                                <label for="pageTitle" class="form-label">Title</label>
                                <input type="text" class="form-control" id="pageTitle" name="pageTitle" placeholder="Enter title" required>
                            </div> -->

                            <!-- <div class="mb-3">
                                <label for="pageDescription" class="form-label">Description</label>
                                <textarea class="form-control" id="pageDescription" name="pageDescription" rows="3" placeholder="Enter description" required></textarea>
                            </div> -->

                           
                            
                        </div>

                        <!-- Column 2 -->
                        <div class="col-md-6">
                            <!-- Description Field -->
                           
                             <!-- Dynamic Image Upload Field -->
                             <div class="mb-3">
                                <label for="pageImages" class="form-label">Upload Images</label>
                                <div id="imageUploadsContainer">
                                    <div class="input-group mb-2">
                                        <input type="file" class="form-control" name="pageImages[]" accept="image/*">
                                        <!-- <button type="button" class="btn btn-danger btn-sm remove-image-upload" style="display: none;">Remove</button> -->
                                    </div>
                                </div>
                                <!-- Button to add more image fields -->
                                <!-- <button type="button" id="addImageUpload" class="btn btn-secondary btn-sm">Add More Images</button> -->
                            </div>

                            <div class="mb-3">
                                <label for="metaTitle" class="form-label">Meta Title</label>
                                <input type="text" class="form-control" id="metaTitle" name="metaTitle" placeholder="Enter meta title">
                            </div>
                            <!-- Meta Description Field -->
                            <div class="mb-3">
                                <label for="metaDescription" class="form-label">Meta Description</label>
                                <textarea class="form-control" id="metaDescription" name="metaDescription" rows="3" placeholder="Enter meta description"></textarea>
                            </div>

                            <!-- Meta Keywords Field -->
                            <div class="mb-3">
                                <label for="metaKeywords" class="form-label">Meta Keywords</label>
                                <input type="text" class="form-control" id="metaKeywords" name="metaKeywords" placeholder="Enter meta keywords">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="savePageContentButton">Save Page Content</button>
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
<script src="{{asset('assets/js/Page/content.js')}}"></script>

@endsection