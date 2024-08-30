<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Appointment;
use App\Models\Device;
use App\Models\Issue;
use App\Models\PageContent;
use Illuminate\Support\Facades\DB;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $pageContents = PageContent::where('status', 1)->get();

        $mobile = Brand::where('category_id',1)->where('status',1)->get();
        // return $pageContents;
        $category = Category::where('status',1)->get();
        // return $category;
        return view('home.index',compact('category','pageContents'));
    }

    public function dashboard()
    {
        return view('admin.index');
    }
    public function DyanamicPage(Request $request)
    {
        $id = $request->query('id');
        $pageContents = PageContent::with(['banner', 'intro'])
                ->where('id',$id)
                ->where('status', 1)
                ->get();
                // return $pageContents;
        return view('home.page',compact('pageContents'));
    }

    public function brand(Request $request)
    {
        $category_id = $request->input('category_id');
        $brands = Brand::where('category_id',$category_id)->where('status',1)->get();
        // return $brands;
        return view('home.brand',compact('brands','category_id'));
    }

    public function device(Request $request)
    {
        $brand_id = $request->input('brand_id');
        session(['brand_id' => $brand_id]);
        $models = Device::where('brand_id',$brand_id)->where('status',1)->get();
        
        return view('home.models',compact('models','brand_id'));
    }
    public function issues(Request $request)
    {
        $model_id = $request->input('model_id');
        session(['model_id' => $model_id]);

        // $brand_id = session('brand_id');
        // $device_id = session('device_id');
        $device = DB::table('devices')
            ->join('brands', 'devices.brand_id', '=', 'brands.id')
            ->where('devices.id', $model_id)
            ->where('devices.status', 1)
            ->select('devices.*', 'brands.name as brand_name')
            ->get();

        // return $device;
        $issues = Issue::where('status',1)->get();
        // return $issues;
        return view('home.issue',compact('issues','device'));
    }
    public function searchBrands(Request $request)
    {

        $query = $request->input('search');
        $results = Brand::where('name', 'LIKE', "%{$query}%")->get();
       
        return response()->json(['results' => $results]);
    }
    public function issue_data(Request $request)
    {
        $issue_id = $request->input('id');

        $Issue = Issue::where('id',$issue_id)->where('status',1)->first();
       
       
        return response()->json($Issue);
    }

    public function AboutUs() 
    {
        return view('home.about_us');
    }
    public function Appointment(Request $request) 
    {
        
        $validator = Validator::make($request->all(), [
            'brand_id' => 'required|exists:brands,id',
            'device_id' => 'required|exists:devices,id',
            'issue_id' => 'required|exists:issues,id',
            'name' => 'required|string|max:100',
            'mobile' => 'required|digits:10',
            'email' => 'required|email|max:100',
            'pincode' => 'required|string|size:6',
            'city_id' => 'required',
            'service_date' => 'required|date|after_or_equal:today',
            'time_slot' => 'required|string|max:20',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }
       
        // Create and save the appointment
        $appointment = new Appointment();
        $appointment->brand_id = $request->brand_id;
        $appointment->device_id = $request->device_id;
        $appointment->issue_id = $request->issue_id;
        $appointment->customer_name = $request->name;
        $appointment->customer_phone = $request->mobile;
        $appointment->customer_email = $request->email;
        $appointment->pincode = $request->pincode;
        $appointment->city_id = $request->city_id;
        $appointment->appointment_date = $request->service_date;
        $appointment->appointment_slot = $request->time_slot;

        // Save the appointment to the database
        $appointment->save();
        $this->sendWhatsAppMessage($appointment);
        return response()->json(['success' => 'Successfully Booking Slot.']);
    }

    private function sendWhatsAppMessage($appointment)
    {
        $sid = env('TWILIO_SID');
        $token = env('TWILIO_AUTH_TOKEN');
        $from = env('TWILIO_WHATSAPP_FROM');
        $client = new Client($sid, $token);

        $message = "Hi " . $appointment->customer_name . ",\n\n";
        $message .= "Your appointment for your device has been successfully booked.\n";
        $message .= "Date: " . $appointment->appointment_date . "\n";
        $message .= "Time Slot: " . $appointment->appointment_slot . "\n";
        $message .= "We will contact you soon.\n\n";
        $message .= "Thank you!";

        try {
            $client->messages->create(
                'whatsapp:' . $appointment->customer_phone, 
                [
                    'from' => $from,
                    'body' => $message
                ]
            );
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            \Log::error('Twilio Error: ' . $e->getMessage());
        }
    }

    public function contact()
    {
        return view('home.contact');
    }
}
