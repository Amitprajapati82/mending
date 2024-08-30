<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\PageBanner;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class BannerController extends Controller
{
    //

    public function index()
    {
        return view('page.page_banners');
    }
    public function store(Request $request)
    {
        $request->validate([
            'bannerTitle' => 'required|string|max:255',
            'bannerImage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            $banner = new PageBanner();
            $banner->title = $request->input('bannerTitle');
            

            if ($request->hasFile('bannerImage')) {
                $image = $request->file('bannerImage');
                $imagePath = $image->store('banners', 'public');
                $banner->image_path = $imagePath;
            }

            $banner->save();

            return response()->json(['message' => 'Banner saved successfully!'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred while saving the banner.'], 500);
        }
    }

    public function getData()
    {
        $banners = PageBanner::where('status',1)->get();

        return DataTables::of($banners)
            ->addIndexColumn() 
            ->addColumn('image_path', function($banner) {
                return $banner->image_path ? "<img src='/storage/{$banner->image_path}' alt='Image' style='width: 100px; height: auto;'>" : 'No Image';
            })
            ->addColumn('action', function($banner) {
                return '
                    <a href="#" class="btn btn-primary btn-sm edit-btn" data-bs-toggle="modal" data-bs-target="#editBannerModal" data-id="' . $banner->id . '">Edit</a>
                    <button class="btn btn-danger btn-sm deleteBanner" data-id="' . $banner->id . '">Delete</button>
                ';
            })
            
            ->rawColumns(['image_path', 'action'])
            ->make(true);
    }

    public function edit(Request $request)
    {
        $id = $request->input('id');
        $banner = PageBanner::find($id);

        if (!$banner) {
            return response()->json(['error' => 'Banner not found'], 404);
        }

        return response()->json($banner);
    }

    public function update(Request $request)
    {
        $bannerId = $request->input('bannerId');
        $banner = PageBanner::find($bannerId);

        if (!$banner) {
            return response()->json(['error' => 'Banner not found'], 404);
        }

        
        $banner->title = $request->input('bannerTitle');
        

        if ($request->hasFile('bannerImage')) {
            $image = $request->file('bannerImage');
            $imagePath = $image->store('banners', 'public');
            $banner->image_path = $imagePath;
        }

        $banner->save();

        return response()->json(['success' => 'Banner updated successfully']);
    }

    public function destroy(Request $request)
    {
        $id = $request->input('id');

        $data = PageBanner::where('id',$id)->update(['status' => 0]);

        return response()->json([$data,'success' => 'Banner Successfully Deleted.']);
    }


}
