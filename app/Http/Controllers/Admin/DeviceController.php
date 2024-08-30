<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Device;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class DeviceController extends Controller
{
    //
    public function index()
    {
        $category = Category::where('status',1)->get();
        $devices = Device::select('devices.*','brands.name as brand_name','categories.name as category_name')
                ->leftJoin('brands','brands.id','=','devices.brand_id')
                ->leftJoin('categories','categories.id','=','devices.category_id')
                ->where('devices.status',1)
                ->get();

        return view('admin.devices',compact('category','devices'));
    }

    
    public function getBrandsByCategory(Request $request)
    {
        $categoryId = $request->input('id');

        $brands = Brand::where('category_id', $categoryId)->where('status',1)->get();

        return response()->json($brands);
    }

    public function store(Request $request)
    {
        $category_id =  $request->input('category_id');
        $brand_id =  $request->input('brand_id');
        $deviceName =  $request->input('deviceName');
        $modelName =  $request->input('deviceModel');
        $deviceSerialNumber =  $request->input('deviceSerialNumber');
        

        // Validate the request data
        $validator = Validator::make($request->all(), [
            'deviceName' => 'required|string|max:255',
            'deviceImage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
           
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }

        $device = new Device();
        $device->category_id = $category_id;
        $device->brand_id = $brand_id;
        $device->device_name = $deviceName;
        $device->model = $modelName;
        $device->serial_number = $deviceSerialNumber;
        if ($request->hasFile('deviceImage')) {
            $image = $request->file('deviceImage');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName); // Save image to 'public/images' directory
            $device->image = 'images/' . $imageName; // Store relative path in the database
        }
        
        $device->save();

        return response()->json(['success' => true, 'device' => $device, 'message' => 'Category added successfully.']);

    }

    public function getDeviceData(Request $request)
    {
        $id = $request->input('id');
        
        $data = Device::select('devices.*','brands.name as brand_name','categories.name as category_name')
                ->leftJoin('brands','brands.id','=','devices.brand_id')
                ->leftJoin('categories','categories.id','=','devices.category_id')
                ->where('devices.id',$id)
                ->where('devices.status',1)
                ->first();
        
        return response()->json([$data,'Success' => 'Succesfully get data.']);
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $device_name = $request->input('editDeviceName');
        $model = $request->input('editDeviceModel');
        $serial_number = $request->input('editDeviceSerialNumber');

        $validator = Validator::make($request->all(), [
            'editDeviceName' => 'required|string|max:255',
            'editDeviceModel' => 'nullable|string',
            'editDeviceSerialNumber' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }

        $device = Device::find($id);
        

        if (!$device) {
            return response()->json(['success' => false, 'message' => 'Category not found.']);
        }else
        {
            
            $device->device_name = $device_name;
            $device->model = $model;
            $device->serial_number = $serial_number;

            if ($request->hasFile('editDeviceImage')) {
                
                if ($device->image && $device->image == null) {
                    Storage::disk('public')->delete($device->image);
                }
    
                
                $path = $request->file('editDeviceImage')->store('images', 'public');
                $device->image = $path;
            }
            $device->save();

            return response()->json(['success' => true, 'device' => $device, 'message' => 'Category updated successfully.']);
        }
    }

    public function destroy(Request $request)
    {
        $id = $request->input('id');

        $data = Device::where('id',$id)->update(['status' => 0]);

        return response()->json([$data,'success' => 'Device Successfully Deleted.']);
    }

    public function getAllDevicesData()
    {
        
        $devices = Device::select([
            'devices.id', 
            'categories.name as category_name', 
            'brands.name as brand_name',
            'devices.image', 
            'devices.device_name', 
            'devices.model', 
            'devices.serial_number'
        ])
        ->leftJoin('brands', 'brands.id', '=', 'devices.brand_id')
        ->leftJoin('categories', 'categories.id', '=', 'devices.category_id')
        ->where('devices.status', 1)
        ->get();

        return Datatables::of($devices)
            ->addIndexColumn()
            ->addColumn('image', function($row) {
                if ($row->image) {

                    $imageUrl = asset('storage/' .$row->image);
                    
                    return '<img src="'.$imageUrl.'" alt="'.$row->name.'" width="100">';
                } else {
                    return 'No Image';
                }
            })
            ->addColumn('action', function($row){
                $btn = '<a href="javascript:void(0);" data-id="'.$row->id.'" class="btn btn-warning editDevice me-2" data-bs-toggle="modal" data-bs-target="#editDeviceModal">Edit</a>';
                $btn .= '<a href="javascript:void(0);" data-id="'.$row->id.'" class="btn btn-danger deleteDevice">Delete</a>';
                return $btn;
            })
            ->rawColumns(['action','image'])
            ->make(true);
    }

}
