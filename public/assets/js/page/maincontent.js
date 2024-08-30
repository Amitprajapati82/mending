$(document).ready(function() {
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
                // location.reload();   
            },
            error: function(xhr) {
                alert('An error occurred while saving the page content.');
                console.log(xhr.responseText); 
            }
        });
    });
});
