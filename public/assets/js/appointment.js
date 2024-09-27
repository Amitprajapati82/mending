$(document).ready(function() {
    $('#tableData').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '/admin/getAppointment',
            type: 'GET'
        },
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'brand_name', name: 'brand_name' },
            { data: 'model_name', name: 'model_name' },
            { data: 'issue_name', name: 'issue_name' },
            { data: 'customer_name', name: 'customer_name' },
            { data: 'customer_phone', name: 'customer_phone' },
            { data: 'customer_email', name: 'customer_email' },
            { data: 'city_id', name: 'city_id' },
            { data: 'pincode', name: 'pincode' },
            { data: 'appointment_date', name: 'appointment_date' },
            { data: 'appointment_slot', name: 'appointment_slot' },
            { 
                data: 'status', 
                name: 'status',
                render: function(data, type, row) {
                    // Create a dropdown for status
                    return `
                        <select class="status-dropdown" data-id="${row.id}">
                            <option class="text-warning" value="pending" ${data === 'pending' ? 'selected' : ''}>Pending</option>
                            <option class="text-primary" value="confirmed" ${data === 'confirmed' ? 'selected' : ''}>Confirmed</option>
                            <option class="text-success" value="completed" ${data === 'completed' ? 'selected' : ''}>Compelete</option>
                            <option class="text-danger" value="canceled" ${data === 'canceled' ? 'selected' : ''}>Canceled</option>
                        </select>

                        <div id="message-container_${row.id}" class="mt-2"></div>
                    `;
                },
                orderable: false,
                searchable: false
            },
            // { data: 'action', name: 'action', orderable: false, searchable: false }
        ],
        order: [[1, 'asc']] 
    });
});

$(document).on('change', '.status-dropdown', function() {
    // Get the selected status and the appointment ID
    var status = $(this).val();
    var appointmentId = $(this).data('id');

    // Send AJAX request to update the status
    $.ajax({
        url: '/admin/updateAppointmentStatus', // Update with your actual route to handle status updates
        type: 'POST',
        data: {
            // _token: '{{ csrf_token() }}', // Include CSRF token for Laravel
            id: appointmentId,
            status: status
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
        },
        success: function(response) {
            console.log(response.id);
            
            // Handle success - Show a message or update the table if necessary
            showTextMessage('Status updated successfully!', 'success',response.id);
        },
        error: function(xhr, status, error) {
            // Handle error
            showTextMessage('Error updating status. Please try again.', 'danger',response.id);
        }
    });

    function showTextMessage(message, type,id) {
        // Create a message element (styled as needed)
        var textMessage = `<p class="${type === 'success' ? 'text-success' : 'text-danger'}">${message}</p>`;
    
        // Append the message to a designated container or replace existing message
        $('#message-container_' + id).html(textMessage);
        // Automatically hide the message after 3 seconds
        setTimeout(function() {
            $('#message-container_' + id).html(''); // Clears the message
        }, 3000);
    }
});