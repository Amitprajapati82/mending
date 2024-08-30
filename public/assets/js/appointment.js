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
            { data: 'status', name: 'status' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ],
        order: [[1, 'asc']] 
    });
});