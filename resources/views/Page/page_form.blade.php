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
            <div class="card mb-4">
                <div class="card-header py-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Add New Page Content Heading -->
                        <h5 class="modal-title m-0">Add New Page Content</h5>
                        <!-- Close Button -->
                        <!-- <button type="button" class="btn-close" aria-label="Close"></button> -->
                    </div>
                </div>
                <!-- Form content directly on the page -->
                <div class="card-body mt-3">
                    <form id="addPageContentForm" enctype="multipart/form-data">
                        <div class="row">
                            <!-- Column 1 -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="pageName" class="form-label">Page Name</label>
                                    <input type="text" class="form-control" id="pageName" name="pageName" placeholder="Enter Name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="bannerId" class="form-label">Select Banner</label>
                                    <select class="form-control" id="bannerId" name="bannerId">
                                        <option value="">--Select Banner--</option>
                                        @foreach ($banner as $item)
                                            <option value="{{$item->id}}">{{$item->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="introId" class="form-label">Select Introduction</label>
                                    <select class="form-control" id="introId" name="introId">
                                        <option value="">--Select Introduction--</option>
                                        @foreach ($introduction as $item)
                                            <option value="{{$item->id}}">{{$item->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
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
                                <!-- Remove button for the initial fields -->
                                <!-- <button type="button" class="btn btn-danger remove-field mb-2">Remove</button> -->
                                <!-- <hr> -->
                            </div>
                        </div>
                        <!-- Button to add more fields -->
                        <button type="button" id="addMoreFields" class="btn btn-secondary mb-3">Add More Fields</button>
                            </div>

                            <!-- Column 2 -->
                            <div class="col-md-6">
                                
                                <div class="mb-3">
                                    <label for="metaTitle" class="form-label">Meta Title</label>
                                    <input type="text" class="form-control" id="metaTitle" name="metaTitle" placeholder="Enter meta title">
                                </div>
                                <div class="mb-3">
                                    <label for="metaDescription" class="form-label">Meta Description</label>
                                    <textarea class="form-control" id="metaDescription" name="metaDescription" rows="3" placeholder="Enter meta description"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="metaKeywords" class="form-label">Meta Keywords</label>
                                    <input type="text" class="form-control" id="metaKeywords" name="metaKeywords" placeholder="Enter meta keywords">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary me-2">Cancel</button>
                            <button type="submit" class="btn btn-primary" id="savePageContentButton">Save Page Content</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

</main>

<script src="{{asset('assets/js/Page/form.js')}}"></script>

@endsection