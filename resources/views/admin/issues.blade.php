@extends('layout.app')

@section('content')


<main id="main" class="main">
    <div class="pagetitle">
        <h1>Report</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item">Report Issues </li>
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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addIssueModal">
                            <i class="bi bi-plus"></i> Add New Issue
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
                                        <th>Issue Name</th>
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
<div class="modal fade" id="addIssueModal" tabindex="-1" aria-labelledby="addIssueModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addIssueModalLabel">Report an Issue</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Issue form fields -->
        <form id="addIssueForm" enctype="multipart/form-data">
          
          <div class="mb-3">
            <label for="issueType" class="form-label">Issue Type</label>
            <input type="text" class="form-control" id="issueType" name="issueType" placeholder="Enter issue type" required>
          </div>
          
          <div class="mb-3">
            <label for="issueImage" class="form-label">Upload Image</label>
            <input type="file" class="form-control" id="issueImage" name="issueImage" accept="image/*">
          </div>
          <div class="m-3">
            <img id="imagePreview" src="" alt="">
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="saveIssueButton">Report Issue</button>
      </div>
    </div>
  </div>
</div>



<!-- Edit Modal -->
<div class="modal fade" id="editIssueModal" tabindex="-1" aria-labelledby="editIssueModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editIssueModalLabel">Edit Issue</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Issue form fields -->
        <form id="editIssueForm" enctype="multipart/form-data">
          <input type="hidden" id="editIssueId" name="id"> <!-- Hidden field to hold issue ID -->

          <div class="mb-3">
            <label for="editIssueName" class="form-label">Issue Name</label>
            <input type="text" class="form-control" id="editIssueName" name="editIssueName" placeholder="Enter issue name" required>
          </div>

          <div class="mb-3">
            <label for="editIssueImage" class="form-label">Upload New Image (Optional)</label>
            <input type="file" class="form-control" id="editIssueImage" name="editIssueImage" accept="image/*">
          </div>
          
          <div class="mb-3">
            <img id="editImagePreview" src="" alt="Current Image Preview" style="max-width: 100%; display: none;">
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="updateIssueButton">Save changes</button>
      </div>
    </div>
  </div>
</div>



<!-- End Edit Modal -->
<script src="{{asset('assets/js/report.js')}}"></script>

@endsection