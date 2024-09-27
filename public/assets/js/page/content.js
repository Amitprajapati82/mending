$(document).ready(function() {
    var table = $('#tableData').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '/admin/page-content/data',
            type: 'GET',
            dataSrc: function(json) {
                if (!json.data) {
                    console.error("No data returned from the server.");
                    return [];
                }
                return json.data;  // Return the data array
            }  // Ensure that 'data' is the key in the server response
        },
        columns: [
            { 
                data: 'id', 
                name: 'id', 
                orderable: false, 
                searchable: false 
            },
            { 
                data: 'page_name', 
                name: 'page_name' 
            },  
            { 
                data: 'banner', 
                name: 'banner', 
                orderable: false, 
                searchable: false,
                render: function(data) {
                    if (data && data.image_path) {
                        return '<img src="/storage/' + data.image_path + '" height="50" alt="Banner Image" />';
                    } else {
                        return 'No Banner';
                    }
                }
            },
            {
                data: 'intro', 
                name: 'intro', 
                orderable: false, 
                searchable: false,
                render: function(data) {
                    return data && data.title ? data.title : 'No Introduction Title'; 
                }
            },
            { 
                data: 'PageMainContent', 
                name: 'PageMainContent',
                orderable: false, 
                searchable: false,
                render: function(data) {
                    return data && data.title ? data.title : 'No Page Title'; 
                }
            },
            { 
                data: 'meta_title', 
                name: 'meta_title' 
            },
            { 
                data: 'meta_description', 
                name: 'meta_description' 
            },
            { 
                data: 'meta_keywords', 
                name: 'meta_keywords' 
            },
            {
                data: 'action', 
                name: 'action', 
                orderable: false, 
                searchable: false,
                render: function(data, type, full) {
                    return `
                        <a href="${window.location.origin}/admin/page-content/edit/${full.id}" class="btn btn-sm btn-primary">Edit</a>
                        <button class="btn btn-sm btn-danger deleteBtn" data-id="${full.id}">Delete</button>
                    `;
                }
                
            }
        ],
        columnDefs: [{
            targets: 0,  
            render: function(data, type, row, meta) {
                return meta.row + 1;  // Increment the row number
            }
        }]
    // });
    
    });

    $('#updatePageContentButton').click(function(event) {
        
        event.preventDefault();

        // Serialize form data
        var formData = $('#editPageContentForm').serialize();

        $.ajax({
            url: '/admin/page-content/update', 
            type: 'POST',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
            },
            success: function(response) {
               
               
                $('#responseMessage').html('<div class="alert alert-success">' + response.success + '</div>');
                
                setTimeout(function() {
                    $('#responseMessage').fadeOut('slow', function() {
                        $(this).remove();
                    });
                }, 1500);
                
                
                table.ajax.reload();
                // $('#editPageContentForm')[0].reset();
            },
            error: function(xhr) {
                
                var errorMessage = '<div class="alert alert-danger">Error updating changes:</div>';
                if (xhr.responseJSON && xhr.responseJSON.errors) {
                    $.each(xhr.responseJSON.errors, function(key, value) {
                        errorMessage += '<div>' + value[0] + '</div>'; 
                    });
                } else {
                    errorMessage += '<div>An unexpected error occurred. Please try again.</div>';
                }
                $('#responseMessage').html(errorMessage);
                
                setTimeout(function() {
                    $('#responseMessage').fadeOut('slow', function() {
                        $(this).remove();
                    });
                }, 1500); 
            }
        });
    });

    // Delete button click handler
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
                    url: '/admin/page-content/delete',
                    method: 'DELETE',
                    data: {
                        id:id,
                        _token: $('meta[name="csrf-token"]').attr('content') 
                    },
                    success: function(response) {
                        table.ajax.reload(); 
                        Swal.fire(
                            'Deleted!',
                            'Your Page has been deleted.',
                            'success'
                        );
                    },
                    error: function(xhr) {
                        Swal.fire(
                            'Error!',
                            'An error occurred while deleting the Page.',
                            'error'
                        );
                    }
                });
            }
        });
    });
    
});