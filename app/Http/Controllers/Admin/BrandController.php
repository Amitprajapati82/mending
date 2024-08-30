<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;


class BrandController extends Controller
{
    //
    public function index()
    {
        $brand = Brand::select('brands.*','categories.name as category_name')
                ->leftJoin('categories','brands.category_id','=','categories.id')
                ->where('brands.status',1)->get();
        $category = Category::where('status',1)->get();
        // return $brand;
        return view('admin.brands',compact('category','brand'));
    }

    public function store(Request $request)
    {
        $catecoryId =  $request->input('categoryId');
        $brandName =  $request->input('brandName');
        $brandImage =  $request->file('brandImage');
        $brandDescription =  $request->input('BrandDescription');
        
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'brandName' => 'required|string|max:255',
            'BrandDescription' => 'nullable|string',
            'brandImage' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }

        $imagePath = null;
        
        if ($request->hasFile('brandImage')) {
            // Store the image in the 'public/brand_images' directory
            $imagePath = $brandImage->store('brand_images', 'public');
        }


        $brand = new Brand();
        $brand->category_id = $catecoryId;
        $brand->name = $brandName;
        $brand->image_path = $imagePath; 
        $brand->description = $brandDescription;

        $brand->save();

        return response()->json(['success' => true, 'brand' => $brand, 'message' => 'Category added successfully.']);

    }

    public function getBrandData(Request $request)
    {
        $id = $request->input('id');
        
        $data = Brand::select('brands.*','categories.name as category_name')
                ->leftJoin('categories','brands.category_id','=','categories.id')
                ->where('brands.status',1)
                ->where('brands.id',$id)
                ->first();
        
        return response()->json([$data,'Success' => 'Succesfully get data.']);
    }

    public function update(Request $request)
{
    $id = $request->input('editBrandId');
    $name = $request->input('editBrandName');
    $image = $request->file('editBrandImage');
    $description = $request->input('editBrandDescription');

    $validator = Validator::make($request->all(), [
        'editBrandName' => 'required|string|max:255',
        'editBrandDescription' => 'nullable|string',
        'editBrandImage' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image if uploaded
    ]);

    if ($validator->fails()) {
        return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
    }

    $brand = Brand::find($id);

    if (!$brand) {
        return response()->json(['success' => false, 'message' => 'Brand not found.']);
    } else {
        $brand->name = $name;
        $brand->description = $description;

       
        if ($image) {
            
            if ($brand->image_path && $brand->image_path == null) {
                Storage::disk('public')->delete($brand->image_path);
            }

            
            $path = $image->store('images', 'public');
            $brand->image_path = $path;
        }

        $brand->save();

        return response()->json(['success' => true, 'brand' => $brand, 'message' => 'Brand updated successfully.']);
    }
}


    public function destroy(Request $request)
    {
        $id = $request->input('id');

        $data = Brand::where('id',$id)->update(['status' => 0]);

        return response()->json([$data,'success' => 'Brand Successfully Deleted.']);
    }

    public function getAllBrandData()
    {
        
        $brand = Brand::where('brands.status', 1)
            ->leftJoin('categories', 'brands.category_id', '=', 'categories.id')
            ->select([
                'brands.id',
                'categories.name as category_name',
                'brands.name',
                'brands.image_path', 
                'brands.description'
            ])
            ->get();

        return Datatables::of($brand)
            ->addIndexColumn()
            ->addColumn('image', function($row) {
                if ($row->image_path) {

                    $imageUrl = asset('storage/' .$row->image_path);
                    
                    return '<img src="'.$imageUrl.'" alt="'.$row->name.'" width="100">';
                } else {
                    return 'No Image';
                }
            })
            ->addColumn('action', function($row) {
                $btn = '<a href="javascript:void(0);" data-id="'.$row->id.'" class="btn btn-warning editBrand me-2" data-bs-toggle="modal" data-bs-target="#editBrandModal">Edit</a>';
                $btn .= '<a href="javascript:void(0);" data-id="'.$row->id.'" class="btn btn-danger deleteBrand">Delete</a>';
                return $btn;
            })
            ->rawColumns(['image', 'action']) 
            ->make(true);
    }
}
