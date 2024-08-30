$(document).ready(function () {
    
    $('#saveCategoryButton').on('click', function() {

        let form = $('#addCategoryForm');
        let formData = form.serialize();
        console.log(formData);
        
        $.ajax({
            url: '/admin/categories/store',
            method: 'POST',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                if (data.success) {

                    $('#addCategoryModal').modal('hide');

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
        ajax: {
            url: '/admin/categories/data', 
            type: 'GET',
        },
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'name', name: 'name' },
            { data: 'description', name: 'description' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    });

    $('#tableData').on('click', '.editCategory', function() {

        var id = $(this).data('id'); 
        
        $.ajax({
            url: '/admin/get_category_data', 
            type: 'GET',
            data:{id:id},
            success: function(data) {
                
                $('#editCategoryId').val(data[0].id);
                $('#editCategoryName').val(data[0].name);
                $('#editCategoryDescription').val(data[0].description);
                $('#editCategoryModal').modal('show'); 
            },
            error: function(xhr) {
                console.error(xhr.responseText); 
            }
        });
    });


    $('#updateCategoryButton').on('click', function(e) {
        let form = $('#editCategoryForm');
        let formData = form.serialize();
        
        e.preventDefault(); 
        
        $.ajax({
            url: '/admin/categories/update', 
            type: 'PUT',
            data: formData, 
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {

                $('#editCategoryModal').modal('hide');
                table.ajax.reload(); 
            },
            error: function(xhr) {
                console.error(xhr.responseText); 
            }
        });
    });

    $('#tableData').on('click', '.deleteCategory', function() { 
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
                    url: '/admin/categories/delete',
                    method: 'DELETE',
                    data: {
                        id:id,
                        _token: $('meta[name="csrf-token"]').attr('content') 
                    },
                    success: function(response) {
                        table.ajax.reload(); 
                        Swal.fire(
                            'Deleted!',
                            'Your category has been deleted.',
                            'success'
                        );
                    },
                    error: function(xhr) {
                        Swal.fire(
                            'Error!',
                            'An error occurred while deleting the category.',
                            'error'
                        );
                    }
                });
            }
        });
    });
});