$(document).ready(function() {

    $('#saveBannerButton').on('click', function(e) {
        e.preventDefault();
        
        var formData = new FormData($('#addBannerForm')[0]);
        
        $.ajax({
            url: '/admin/page/banner', 
            type: 'POST',
            data: formData,
            processData: false, 
            contentType: false, 
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                
                // alert('Banner saved successfully!');
                $('#addBannerModal').modal('hide');
                table.ajax.reload(); 
                
                $('#addBannerForm')[0].reset();
                $('#imagePreview').attr('src', '').hide(); 
            },
            error: function(xhr, status, error) {
                
                alert('An error occurred while saving the banner.');
            }
        });
    });

    var table = $('#tableData').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/admin/page/get_data',
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false }, // Index column
            { data: 'title', name: 'title' },
            { data: 'image_path',name: 'image_path'},
            {data: 'action',name: 'action',orderable: false,searchable: false }
        ]
    });


    $('#bannerImage').on('change', function(event) {
        var reader = new FileReader();
        reader.onload = function() {
            $('#imagePreview').attr('src', reader.result).show();
        };
        reader.readAsDataURL(event.target.files[0]);
    });

    $('#editBannerImage').on('change', function() {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#editImagePreview').attr('src', e.target.result).show();
        };
        if (this.files && this.files[0]) {
            reader.readAsDataURL(this.files[0]);
        } else {
            $('#editImagePreview').hide();
        }
    });

    $('#tableData').on('click', '.edit-btn', function() {
        var bannerId = $(this).data('id');
        var url = '/admin/page/edit'; 

       
        $.ajax({
            url: url,
            method: 'GET',
            data:{id:bannerId},
            success: function(data) {
                $('#editBannerId').val(data.id);
                $('#editBannerTitle').val(data.title);
                // $('#editBannerDescription').val(data.description);

                if (data.image_path) {
                    $('#editImagePreview').attr('src', '/storage/' + data.image_path).show();
                } else {
                    $('#editImagePreview').hide();
                }
            }
        });
    });

    $('#updateBannerButton').on('click', function() {
        var formData = new FormData($('#editBannerForm')[0]);

        $.ajax({
            url: '/admin/page/update',
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
            },
            success: function(response) {
                $('#editBannerModal').modal('hide');
                $('#tableData').DataTable().ajax.reload(); 
               
            },
            error: function(xhr) {
                
                alert('An error occurred. Please try again.');
            }
        });
    });

    $('#tableData').on('click', '.deleteBanner', function() { 
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
                    url: '/admin/page/delete',
                    method: 'DELETE',
                    data: {
                        id:id,
                        _token: $('meta[name="csrf-token"]').attr('content') 
                    },
                    success: function(response) {
                        table.ajax.reload(); 
                        Swal.fire(
                            'Deleted!',
                            'Your banner has been deleted.',
                            'success'
                        );
                    },
                    error: function(xhr) {
                        Swal.fire(
                            'Error!',
                            'An error occurred while deleting the banner.',
                            'error'
                        );
                    }
                });
            }
        });
    });


});