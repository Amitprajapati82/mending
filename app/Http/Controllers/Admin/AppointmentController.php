<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function index(Request $request)
    {
        
        return view('admin.appointment');
    }
    public function getAppointmentData(Request $request)
    {
        
        if ($request->ajax()) {
            $appointments = Appointment::with(['brand', 'device', 'issue'])
            ->select([
                'id', 
                'brand_id',
                'device_id',
                'issue_id',
                'customer_name', 
                'customer_phone', 
                'customer_email',
                'pincode', 
                'city_id',
                'appointment_date', 
                'appointment_slot',
                'status'
            ])
            ->get()
            ->map(function($appointment) {
                return [
                    'id' => $appointment->id,
                    'brand_name' => $appointment->brand->name,
                    'model_name' => $appointment->device->device_name,
                    'issue_name' => $appointment->issue->name,
                    'customer_name' => $appointment->customer_name,
                    'customer_phone' => $appointment->customer_phone,
                    'customer_email' => $appointment->customer_email,
                    'pincode' => $appointment->pincode,
                    'city_id' => $appointment->city_id,
                    'appointment_date' => $appointment->appointment_date,
                    'appointment_slot' => $appointment->appointment_slot,
                    'status' => $appointment->status,
                ];
            });

            return DataTables::of($appointments)
                ->addIndexColumn()  
                ->addColumn('action', function($row) {
                    
                    return '<a href="" class="btn btn-primary btn-sm">Edit</a>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
