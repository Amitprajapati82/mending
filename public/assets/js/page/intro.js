$(document).ready(function() {
    
    var imageCount = 1;

    
    $('#addImageUpload').on('click', function() {
        
        imageCount++;

        
        var newFileInput = `
            <div class="input-group mb-2">
                <input type="file" class="form-control" name="pageImages[]" accept="image/*">
                <button type="button" class="btn btn-danger btn-sm remove-image-upload">Remove</button>
            </div>
        `;

        
        $('#imageUploadsContainer').append(newFileInput);
    });

    
    $('#imageUploadsContainer').on('click', '.remove-image-upload', function() {
        $(this).parent('.input-group').remove(); 
    });

    
    $('#savePageIntroButton').on('click', function() {
        var formData = new FormData($('#addPageIntroForm')[0]);

        $.ajax({
            url: '/admin/page-introduction/store', 
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
            },
            success: function(response) {
              
                $('#addPageIntroModal').modal('hide'); 
                $('#addPageIntroForm')[0].reset(); 
                
                $('#tableData').DataTable().ajax.reload();
            },
            error: function(xhr) {
                
                alert('An error occurred while saving the page introduction.');
            }
        });
    });

    var table = $('#tableData').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '/admin/page-introduction/data',
            type: 'GET'
        },
        columns: [
            { data: 'id', name: 'id', render: function(data, type, row, meta) {
                return meta.row + 1;
            }},
            { data: 'title', name: 'title' },
            { data: 'description', name: 'description' },
            { data: 'images', name: 'images', render: function(data) {
                var images = JSON.parse(data);
                var html = '';
                images.forEach(function(image) {
                    html += '<img src="/storage/' + image + '" alt="Image" class="img-thumbnail" width="50">';
                });
                return html;
            }},
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    });

    $('#tableData').on('click', '.edit-btn', function() {
        var pageIntroId = $(this).data('id');
        var url = '/admin/page-introduction/edit'; 
        $.ajax({
            url: url,
            method: 'GET',
            data:{
                id:pageIntroId
            },
            success: function(data) {
                $('#editPageIntroId').val(data.id);
                $('#editPageTitle').val(data.title);
                $('#editPageDescription').val(data.description);

                $('#editImageUploadsContainer').empty();
                if (data.images && data.images.length > 0) {
                    data.images.forEach(function(image) {
                        $('#editImageUploadsContainer').append(`
                            <div class="input-group mb-2">
                                <img src="/storage/${image}" alt="Image" class="img-preview img-thumbnail" width="100">
                                <button type="button" class="btn btn-danger btn-sm remove-image-upload">Remove</button>
                            </div>`);
                    });
                } else {
                    $('#editImageUploadsContainer').append(`
                        <div class="input-group mb-2">
                            <input type="file" class="form-control" name="pageImages[]" accept="image/*">
                            <button type="button" class="btn btn-danger btn-sm remove-image-upload" style="display: none;">Remove</button>
                        </div>`);
                }
            }
        });
    });

    
    $('#editAddImageUpload').on('click', function() {
        var newImageUpload = `
            <div class="input-group mb-2">
                <input type="file" class="form-control" name="pageImages[]" accept="image/*">
                <button type="button" class="btn btn-danger btn-sm remove-image-upload">Remove</button>
            </div>`;
        $('#editImageUploadsContainer').append(newImageUpload);
    });

   
    $(document).on('click', '.remove-image-upload', function() {
        $(this).closest('.input-group').remove();
    });

    $('#updatePageIntroButton').on('click', function() {
        var formData = new FormData($('#editPageIntroForm')[0]);
        $.ajax({
            url: '/admin/page-introduction/update', 
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
            },
            success: function(response) {
                $('#editPageIntroModal').modal('hide');
                $('#tableData').DataTable().ajax.reload(); // Reload DataTable
                alert('Page Introduction updated successfully!');
            },
            error: function(xhr) {
                alert('Failed to update Page Introduction. Please try again.');
            }
        });
    });

    $('#tableData').on('click', '.deleteIntro', function() { 
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
                    url: '/admin/page-introduction/delete',
                    method: 'DELETE',
                    data: {
                        id:id,
                        _token: $('meta[name="csrf-token"]').attr('content') 
                    },
                    success: function(response) {
                        table.ajax.reload(); 
                        Swal.fire(
                            'Deleted!',
                            'Your Introduction has been deleted.',
                            'success'
                        );
                    },
                    error: function(xhr) {
                        Swal.fire(
                            'Error!',
                            'An error occurred while deleting the Introduction.',
                            'error'
                        );
                    }
                });
            }
        });
    });

});
// $(document).on('change', 'input[type="file"][name="pageImages[]"]', function(event) {
//     var fileInput = this;
//     if (fileInput.files && fileInput.files[0]) {
//         var reader = new FileReader();
//         reader.onload = function(e) {
//             $(fileInput).siblings('.img-preview').remove(); 
//             $(fileInput).closest('.input-group').append('<img src="' + e.target.result + '" alt="Image Preview" class="img-preview img-thumbnail mt-2" width="100">');
//         }
//         reader.readAsDataURL(fileInput.files[0]);
//     }
// });
