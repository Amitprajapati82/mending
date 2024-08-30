$(document).ready(function() {
    
    $('#categorySelect').on('change', function() {
        var categoryId = $(this).val();

        if (categoryId) {
            $.ajax({
                url: '/admin/brands_get', 
                method: 'GET',
                data:{id:categoryId},
                success: function(data) {
                    
                    $('#brandSelect').empty();
                    
                   
                    $('#brandSelect').append('<option value="" disabled selected>Select Brand</option>');

                   
                    $.each(data, function(index, brand) {
                        $('#brandSelect').append('<option value="' + brand.id + '">' + brand.name + '</option>');
                    });
                },
                error: function(xhr) {
                    console.error('Error:', xhr.responseText);
                }
            });
        } else {
            
            $('#brandSelect').empty();
            $('#brandSelect').append('<option value="" disabled selected>Select Brand</option>');
        }
    });

    $('#saveDeviceButton').on('click', function(e) {
        e.preventDefault(); // Prevent the default form submission
    
        let form = $('#addDeviceForm')[0]; // Get the form element
        let formData = new FormData(form); // Create a FormData object
    
        // Log FormData entries for debugging
        for (let pair of formData.entries()) {
            console.log(`${pair[0]}: ${pair[1]}`);
        }
    
        $.ajax({
            url: '/admin/devices/store',
            type: 'POST', // Use 'type' instead of 'method' for older versions
            data: formData,
            processData: false, // Prevent jQuery from automatically processing the data
            contentType: false, // Prevent jQuery from automatically setting the Content-Type header
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Include CSRF token
            },
            success: function(data) {
                if (data.success) {
                    $('#addDeviceModal').modal('hide');
                    location.reload(); // Reload the page to reflect changes
                } else {
                    console.error('Error:', data.message); // Log error message
                    alert('Error: ' + data.message); // Optional: Display an alert for errors
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error); // Log detailed AJAX error
                alert('An error occurred while saving the device.'); // Optional: Display a user-friendly alert
            }
        });
    });

    $('#deviceImage').on('change', function(event) {
        var input = event.target;
        var reader = new FileReader();

        reader.onload = function(){
            var dataURL = reader.result;
            var imagePreview = $('#imagePreview');
            imagePreview.attr('src', dataURL);
            imagePreview.show(); // Make sure the image is visible
        };

        reader.readAsDataURL(input.files[0]);
    });

    $('#editDeviceImage').on('change', function(event) {
        var input = event.target;
        var reader = new FileReader();

        reader.onload = function() {
            var dataURL = reader.result;
            var imagePreview = $('#editImagePreview');
            imagePreview.attr('src', dataURL);
            imagePreview.show(); // Make sure the image is visible
        };

        if (input.files && input.files[0]) {
            reader.readAsDataURL(input.files[0]);
        } else {
            // Reset the preview if no file is selected
            $('#editImagePreview').hide();
        }
    });
    

    var table = $('#tableData').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '/admin/devices/data', 
            type: 'GET'
        },
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'category_name', name: 'category_name' },
            { data: 'brand_name', name: 'brand_name' },
            { data: 'image', name: 'image', orderable: false, searchable: false },
            { data: 'device_name', name: 'device_name' },
            { data: 'model', name: 'model' },
            { data: 'serial_number', name: 'serial_number' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ],
        order: [[0, 'asc']]
    });

    $('#tableData').on('click', '.editDevice', function() {
        var deviceId = $(this).data('id');
        $.ajax({
            url: '/admin/get_device_data',
            type: 'GET',
            data:{id:deviceId},
            success: function(data) {
                console.log(data);
                
                
                $('#editDeviceId').val(data[0].id);
                $('#editDeviceModal').val(data[0].id);
                $('#editCategorySelect').val(data[0].category_name);
                $('#editBrandSelect').val(data[0].brand_name);
                var imagePath = data[0].image ? 'storage/' + data[0].image.replace('admin/', '') : null;

                if (imagePath) {
                    $('#editImagePreview').attr('src', '/' + imagePath).show();
                } else {
                    $('#editImagePreview').attr('src', '').hide();
                }

                $('#editDeviceName').val(data[0].device_name);
                $('#editDeviceModel').val(data[0].model);
                $('#editDeviceSerialNumber').val(data[0].serial_number);
                
                $('#editDeviceModal').modal('show');
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    });

    

    $('#updateDeviceButton').on('click', function(e) {

        e.preventDefault();

        let form = $('#editDeviceForm')[0];
        var formData = new FormData(form);
        
        
        for (let pair of formData.entries()) {
            console.log(pair[0] + ': ' + pair[1]);
        }
        
        $.ajax({
            url: '/admin/devices/update',
            method: 'POST',
            data: formData,
            contentType: false, 
            processData: false, 
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                if (data.success) {
                    $('#editDeviceModal').modal('hide');
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
    
    

    $('.editDevice').on('click', function (e) {

        e.preventDefault();

        var recordId = $(this).data('id');
       
        $.ajax({
            url: '/admin/get_device_data', 
            type: 'GET',
            data:{
                id:recordId
            },
            success: function (data) {
                
                
                $('#editDeviceId').val(data[0].id);
                $('#editCategorySelect').empty();

                $.each(data, function(index, device) {
                    $('#editCategorySelect').append('<option value="' + device.category_id + '">' + device.category_name + '</option>');
                });

                $('#editBrandSelect').empty();
                $.each(data, function(index, device) {
                    console.log(device);
                    $('#editBrandSelect').append('<option value="' + device.brand_id + '">' + device.brand_name + '</option>');
                });
               
                $('#editDeviceName').val(data[0].device_name);
                $('#editDeviceModel').val(data[0].model); 
                $('#editDeviceSerialNumber').val(data[0].serial_number); 

            },
            error: function (error) {
                console.log(error);
            }
        });
    });

    

    $('.deleteDevice').on('click', function() {
        let deviceId = $(this).data('id');

        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this Device!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function() {
            $.ajax({
                url: '/admin/devices/delete',
                method: 'DELETE',
                data:{id:deviceId},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    if (data.success) {
                        // Remove the row from the table
                        $('#items-' + brandId).remove();
                        swal("Deleted!", "The Brand has been deleted.", "success");
                    } else {
                        swal("Error!", "There was a problem deleting the Brand.", "error");
                    }
                },
                error: function(xhr) {
                    swal("Error!", xhr.responseText, "error");
                }
            });
        });
    });
});
