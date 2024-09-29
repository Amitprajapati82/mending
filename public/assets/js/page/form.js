
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

    $('#savePageContentButton').on('click', function(e) {
        e.preventDefault(); 

        var formData = new FormData($('#addPageContentForm')[0]);

        $.ajax({
            url: '/admin/page-content/store',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
            },
            success: function(response) {
               
                // alert('Page content saved successfully!');
                // $('#addPageContentForm')[0].reset();
                $('#dynamicFieldsContainer').empty();
                $('#tableData').DataTable().ajax.reload();
                window.location.href = '/admin/page-content';
            },
            error: function(xhr) {
                
                // alert('An error occurred while saving the page content.');
            }
        });
    });
    

    $(document).ready(function () {
        // Initialize form validation
        $("#addPageContentForm").validate({
            rules: {
                pageName: {
                    required: true,
                    minlength: 3
                },
                bannerId: {
                    required: true
                },
                introId: {
                    required: true
                },
                titleId: {
                    required: true
                },
                metaTitle: {
                    required: true,
                    minlength: 3
                },
                metaDescription: {
                    required: true,
                    minlength: 10
                },
                metaKeywords: {
                    required: true
                }
            },
            messages: {
                pageName: {
                    required: "Please enter a page name",
                    minlength: "Page name must be at least 3 characters long"
                },
                bannerId: {
                    required: "Please select a banner"
                },
                introId: {
                    required: "Please select an introduction"
                },
                titleId: {
                    required: "Please select a title"
                },
                metaTitle: {
                    required: "Please enter a meta title",
                    minlength: "Meta title must be at least 3 characters long"
                },
                metaDescription: {
                    required: "Please enter a meta description",
                    minlength: "Meta description must be at least 10 characters long"
                },
                metaKeywords: {
                    required: "Please enter meta keywords"
                }
            },
            errorElement: 'div',  // Wrap the error message in a <div> tag
            errorClass: 'error',  // Use the error class for styling
            errorPlacement: function (error, element) {
                error.insertAfter(element);  // Place the error message after the input field
            },
            highlight: function (element) {
                $(element).addClass('is-invalid');  // Add Bootstrap's 'is-invalid' class for error input
            },
            unhighlight: function (element) {
                $(element).removeClass('is-invalid');  // Remove the 'is-invalid' class when input is valid
            },
            submitHandler: function (form) {
                form.submit();  // Submit form if validation passes
            }
        });

        // Additional step to trigger validation manually on button click if needed
        $('#savePageContentButton').on('click', function (e) {
            e.preventDefault();
            if ($("#addPageContentForm").valid()) {
                $("#addPageContentForm").submit();
            }
        });
    
    });
});