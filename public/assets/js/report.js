$(document).ready(function () {
    
    $('#saveIssueButton').on('click', function(e) {
        e.preventDefault(); // Prevent default form submission
    
        // Create FormData object from form
        let form = $('#addIssueForm')[0];
        var formData = new FormData(form);
    
        // Optional: Log FormData content for debugging
        for (let pair of formData.entries()) {
            console.log(pair[0] + ': ' + pair[1]);
        }
    
        $.ajax({
            url: '/admin/issues/store',
            method: 'POST',
            data: formData,
            processData: false, // Important for file uploads
            contentType: false, // Important for file uploads
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                if (data.success) {
                    $('#addIssueModal').modal('hide');
                    location.reload();
                } else {
                    console.error('Error:', data.message);
                }
            },
            error: function(xhr) {
                console.error('Error:', xhr.responseText);
            }
        });
    });
    

    var table = $('#tableData').DataTable({
        
        
        processing: true,
        serverSide: true,
        ajax:'/admin/issues/data', 
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'name', name: 'name' },
            { data: 'image', name: 'image', orderable: false, searchable: false },
            { 
                data: 'action', 
                name: 'action', 
                orderable: false, 
                searchable: false,
                render: function(data, type, row) {
                    return `
                        <a href="javascript:void(0);" data-id="${row.id}" class="btn btn-warning editIssue" data-bs-toggle="modal" data-bs-target="#editIssueModal">Edit</a>
                        <a href="javascript:void(0);" data-id="${row.id}" class="btn btn-danger deleteIssue">Delete</a>
                    `;
                }
            }
        ]
    });

    $('#tableData').on('click', '.editIssue', function() {
        var id = $(this).data('id');
        $.ajax({
            url: '/admin/get_issues_data',
            data:{id:id},
            method: 'GET',
            success: function(data) {
                $('#editIssueId').val(data.id);
                $('#editIssueName').val(data.name);
                
            }
        });
    });

    $('#updateIssueButton').on('click', function() {
        
        let form = $('#editIssueForm')[0];
        var formData = new FormData(form);
    
        $.ajax({
            url: '/admin/issues/update', 
            method: 'POST', 
            data: formData,
            processData: false, 
            contentType: false, 
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Ensure CSRF token is included
            },
            success: function(data) {
                if (data.success) {
                    $('#editIssueModal').modal('hide');
                    location.reload(); // Optionally reload the page or update the issue list
                } else {
                    console.error('Error:', data.message);
                }
            },
            error: function(xhr) {
                console.error('Error:', xhr.responseText);
            }
        });
    });
    

    $('#tableData').on('click', '.deleteIssue', function() {
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
                    url: '/admin/issues/delete',
                    method: 'DELETE',
                    data: {
                        id:id,
                        _token: $('meta[name="csrf-token"]').attr('content') 
                    },
                    success: function(response) {
                        table.ajax.reload(); 
                        Swal.fire(
                            'Deleted!',
                            'Your issue has been deleted.',
                            'success'
                        );
                    },
                    error: function(xhr) {
                        Swal.fire(
                            'Error!',
                            'An error occurred while deleting the issue.',
                            'error'
                        );
                    }
                });
            }
        });
    });

    

    


    
});