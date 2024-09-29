$(document).ready(function () {
    
    $('#saveBrandButton').on('click', function() {

        let form = $('#addBrandForm')[0];
        let formData = new FormData(form); 
    
        $.ajax({
            url: '/admin/brands/store',
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false, 
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                if (data.success) {
                    $('#addBrandModal').modal('hide');
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


    $('#brandImage').on('change', function() {

        var imagePreview = $('#brandImage_preview');
        imagePreview.empty(); 
        var file = this.files[0];

        if (file) {
        var reader = new FileReader();
        reader.onload = function(e) {
            var img = $('<img />', {
            src: e.target.result,
            style: 'max-width: 150px; width: 100%; height: auto;'
            });
            imagePreview.append(img);
        };
        reader.readAsDataURL(file);
        }
    });


    $('#editBrandImage').on('change', function() {

        var imagePreview = $('#editBrandImage_preview');
        imagePreview.empty(); 
        var file = this.files[0];

        if (file) {

        var reader = new FileReader();
        reader.onload = function(e) {
            var img = $('<img />', {
            src: e.target.result,
            style: 'max-width: 100%; height: auto;'
            });
            imagePreview.append(img);
        };
        reader.readAsDataURL(file);
        }
    });
    

    var table = $('#tableData').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '/admin/brands/data', 
            type: 'GET'
        },
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'category_name', name: 'category_name' },
            { data: 'name', name: 'name' },
            { data: 'image', name: 'image', orderable: false, searchable: false }, 
            { data: 'description', name: 'description' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ],
        order: [[0, 'asc']]
    });


    $('#tableData').on('click', '.editBrand', function() {

        var id = $(this).data('id');

        $.ajax({
            url: '/admin/get_brand_data',
            data:{id:id},
            method: 'GET',
            success: function(data) {
                console.log(data);
                
                var categoryOptions = '';
                $.each(data, function(index, category) {
                    categoryOptions += '<option value="' + category.category_id + '">' + category.category_name + '</option>';
                });
                $('#editBrandModal #editCategoryId').html(categoryOptions);                
                
                $('#editBrandId').val(data[0].id);
                // console.log(cat);
                $('#editBrandName').val(data[0].name);

                var imagePath = data[0].image_path ? '/storage/' + data[0].image_path.replace('public/', '') : null;

                if (imagePath) {
                    $('#editBrandImage_preview').html('<img src="' + imagePath + '" style="max-width: 150px; width: 100%; height: auto;">');
                } else {
                    $('#editBrandImage_preview').empty();
                }

                $('#editBrandDescription').val(data[0].description);
                
            }
        });
    });


    $('#updateBrandButton').on('click', function() {
        var form = $('#editBrandForm')[0];
        var formData = new FormData(form);
        
        
        var id = $('#editBrandId').val();

        $.ajax({
            url: '/admin/brands/update',
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
            },
            success: function(response) {
                $('#editBrandModal').modal('hide');
                table.ajax.reload();
                
            }
        });
    });

    

    $('#tableData').on('click', '.deleteBrand', function() { 
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
                    url: '/admin/brands/delete',
                    method: 'DELETE',
                    data: {
                        id:id,
                        _token: $('meta[name="csrf-token"]').attr('content') 
                    },
                    success: function(response) {
                        table.ajax.reload(); 
                        Swal.fire(
                            'Deleted!',
                            'Your brand has been deleted.',
                            'success'
                        );
                    },
                    error: function(xhr) {
                        Swal.fire(
                            'Error!',
                            'An error occurred while deleting the brand.',
                            'error'
                        );
                    }
                });
            }
        });
    });


   

    
});