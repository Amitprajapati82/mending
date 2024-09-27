$(document).ready(function() {

    var table = $('#tableData').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '/admin/page-main-content/data', 
            type: 'GET',
            dataSrc: function(json) {
                if (!json.data) {
                    console.error("No data returned from the server.");
                    return [];
                }
                return json.data;  // Return the data array
            }
        },
        columns: [
            { 
                data: null, 
                orderable: false, 
                searchable: false, 
                render: function(data, type, row, meta) {
                    // Serial number
                    return meta.row + meta.settings._iDisplayStart + 1; 
                }
            },
            { 
                data: 'title', 
                name: 'title', 
                orderable: true, 
                searchable: true 
            },
            { 
                data: 'description', 
                name: 'description', 
                orderable: true, 
                searchable: true 
            },
            { 
                data: 'images', 
                name: 'images', 
                render: function(data) {
                    try {
                        // Parse JSON string for images
                        const images = JSON.parse(data);
                        if (images && images.length > 0) {
                            return `<img src="${images[0]}" alt="Image" style="width: 100px; height: auto;">`; 
                        } else {
                            return 'No Image Available';
                        }
                    } catch (error) {
                        console.error("Error parsing image data: ", error);
                        return 'Invalid Image Data';
                    }
                }
            },
            { 
                data: null, 
                orderable: false, 
                searchable: false, 
                render: function(data) {
                    return `
                        <button class="btn btn-sm btn-warning editBtn" data-bs-toggle="modal" data-bs-target="#editPageMainContentModal" data-id="${data.id}">Edit</button>
                        <button class="btn btn-sm btn-danger deleteBtn" data-id="${data.id}">Delete</button>
                    `;
                }
            }
        ]
    });

    $('#tableData').on('click', '.editBtn', function() {
        var id = $(this).data('id');

        // Fetch data via AJAX
        $.ajax({
            url: `/admin/page-main-content/edit`,  // Adjust URL as needed
            type: 'GET',
            data:{id:id},
            success: function(data) {
                // Populate the modal fields with the fetched data
                $('#editId').val(data.id);
                $('#editPageTitle').val(data.title);
                $('#editPageDescription').val(data.description);

                // If there's an image, display it in the preview
                if (data.images && data.images.length > 0) {
                    $('#editImagePreview').attr('src', data.images[0]).show();
                } else {
                    $('#editImagePreview').hide(); // Hide the preview if no image
                }

                // Open the modal
                $('#editPageMainContentModal').modal('show');
            },
            error: function(xhr, status, error) {
                console.error("Error fetching data: ", error);
            }
        });
    });

    $('#updatePageMainContentButton').on('click', function () {
        var formData = new FormData($('#editPageMainContentForm')[0]); 
        console.log(formData);
        // Collect form data

        // Send AJAX request to update the content
        $.ajax({
            url: `/admin/page-main-content/update`,  // Adjust the URL based on your routes
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
            },
            success: function (response) {
                // Close the modal
                $('#editPageMainContentModal').modal('hide');

                // Reload the table data (if using DataTables)
                table.ajax.reload();

                // Optionally show a success message
                // alert('Content updated successfully');
            },
            error: function (xhr, status, error) {
                console.error("Error updating content: ", error);
                alert('Failed to update content.');
            }
        });
    });

    $('#tableData').on('click', '.deleteBtn', function() { 
        var id = $(this).data('id');

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '/admin/page-main-content/delete',
                    method: 'DELETE',
                    data: {
                        id:id,
                        _token: $('meta[name="csrf-token"]').attr('content') 
                    },
                    success: function(response) {
                        table.ajax.reload(); 
                        Swal.fire(
                            'Deleted!',
                            'Your PageMain has been deleted.',
                            'success'
                        );
                    },
                    error: function(xhr) {
                        Swal.fire(
                            'Error!',
                            'An error occurred while deleting the PageMain.',
                            'error'
                        );
                    }
                });
            }
        });
    });

    
    // Add more fields
    $('#addMoreFields').click(function() {
        const newFieldSet = `
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
                <button type="button" class="btn btn-danger remove-field mb-2">Remove</button>
                <hr>
            </div>
        `;
        $('#dynamicFieldsContainer').append(newFieldSet);
    });

    // Remove fields
    $(document).on('click', '.remove-field', function() {
        $(this).closest('.dynamic-field').remove();
    });

    $('#savePageMainContentButton').click(function() {
        var formData = new FormData($('#addPageMainContentForm')[0]); 

        $.ajax({
            url: "/admin/page-main-content/store",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
            },
            success: function(response) {
                
                $('#addPageMainContentModal').modal('hide');
                table.ajax.reload(full,null);
                // location.reload();   
            },
            error: function(xhr) {
                alert('An error occurred while saving the page content.');
                console.log(xhr.responseText); 
            }
        });
    });
});
