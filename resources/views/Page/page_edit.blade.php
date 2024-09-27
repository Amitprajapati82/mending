@extends('layout.app')

@section('content')
<style>
    .error {
        color: red;
        font-size: 14px;
        margin-top: 5px;
    }
</style>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Page</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item">Page</li>
                <li class="breadcrumb-item">Content</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="m-3" id="responseMessage"></div>
                <div class="card-header py-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="modal-title m-0">Edit Page Content</h5>
                    </div>
                </div>
                <!-- Form content directly on the page -->
                
                <div class="card-body mt-3">
                <form id="editPageContentForm" enctype="multipart/form-data" action="" method="POST">
                    @csrf
                    <input type="hidden" id="page_id" name="page_id" value="{{$page->id}}">
                    <div class="row">
                        <!-- Column 1 -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="pageName" class="form-label">Page Name</label>
                                <input type="text" class="form-control" id="pageName" name="pageName" value="{{ $page->page_name }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="bannerId" class="form-label">Select Banner</label>
                                <select class="form-control" id="bannerId" name="bannerId" required>
                                    <option value="">--Select Banner--</option>
                                    @foreach ($banner as $item)
                                        <option value="{{$item->id}}" {{ $page->banner_id == $item->id ? 'selected' : '' }}>{{$item->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="introId" class="form-label">Select Introduction</label>
                                <select class="form-control" id="introId" name="introId" required>
                                    <option value="">--Select Introduction--</option>
                                    @foreach ($introduction as $item)
                                        <option value="{{$item->id}}" {{ $page->intro_id == $item->id ? 'selected' : '' }}>{{$item->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="titleId" class="form-label">Select Title</label>
                                <select class="form-control" id="titleId" name="titleId" required>
                                    <option value="">--Select Title--</option>
                                    @foreach ($title as $item)
                                        <option value="{{$item->id}}" {{ $page->page_main_content_id == $item->id ? 'selected' : '' }}>{{$item->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Column 2 -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="metaTitle" class="form-label">Meta Title</label>
                                <input type="text" class="form-control" id="metaTitle" name="metaTitle" value="{{ $page->meta_title }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="metaDescription" class="form-label">Meta Description</label>
                                <textarea class="form-control" id="metaDescription" name="metaDescription" rows="3" required>{{ $page->meta_description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="metaKeywords" class="form-label">Meta Keywords</label>
                                <input type="text" class="form-control" id="metaKeywords" name="metaKeywords" value="{{ $page->meta_keywords }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary me-2">Cancel</button>
                        <button type="button" class="btn btn-primary" id="updatePageContentButton">Update Changes</button>
                    </div>
                </form>
                
                </div>
            </div>
        </div>
    </div>
</section>

</main>

<script src="{{asset('assets/js/Page/content.js')}}"></script>

@endsection
