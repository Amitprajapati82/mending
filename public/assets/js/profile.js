$(document).ready(function () {
    $('#changePasswordForm').on('submit', function (e) {
        e.preventDefault(); // Prevent the form from submitting normally

        // Clear any previous error messages
        $('.form-control').removeClass('is-invalid');
        $('.invalid-feedback').remove();

        $.ajax({
            url: '/profile/change-password', // URL to submit to
            type: 'POST',
            data: $(this).serialize(), // Serialize the form data
            success: function (response) {
                // Handle success response
                alert(response.message); // Show success message
            },
            error: function (xhr) {
                // Handle error response
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;

                    // Loop through the errors and display them next to the form fields
                    for (let key in errors) {
                        let inputField = $('input[name="' + key + '"]');
                        inputField.addClass('is-invalid'); // Add invalid class to the field

                        // Append error message
                        inputField.after('<div class="invalid-feedback">' + errors[key][0] + '</div>');
                    }
                } else {
                    alert('Something went wrong. Please try again.');
                }
            }
        });
    });
})