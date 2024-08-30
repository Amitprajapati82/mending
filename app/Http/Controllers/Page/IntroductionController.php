<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\PageIntro;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class IntroductionController extends Controller
{
    //
    public function index()
    {
        return view('page.page_intro');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'pageTitle' => 'required|string|max:255',
            'pageDescription' => 'required|string',
            'pageImages.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        
        $pageIntro = new PageIntro();
        $pageIntro->title = $request->input('pageTitle');
        $pageIntro->description = $request->input('pageDescription');

       
        $imagePaths = [];
        if ($request->hasFile('pageImages')) {
            foreach ($request->file('pageImages') as $image) {
                $path = $image->store('images/page-introductions', 'public');
                $imagePaths[] = $path;
            }
        }

        // Save images as JSON
        $pageIntro->images = json_encode($imagePaths);
        $pageIntro->status = 1; 
        $pageIntro->save();

        return response()->json(['success' => 'Page Introduction added successfully!']);
    }

    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $pageIntroductions = PageIntro::where('status',1)->get();
    
            return DataTables::of($pageIntroductions)
                ->addColumn('images', function($row) {
                    return $row->images; 
                })
                ->addColumn('action', function($row) {
                    return '
                        <a href="#" class="btn btn-primary btn-sm edit-btn" data-bs-toggle="modal" data-bs-target="#editPageIntroModal" data-id="' . $row->id . '">Edit</a>
                        <button class="btn btn-danger btn-sm deleteIntro" data-id="' . $row->id . '">Delete</button>
                    ';
                })
                ->rawColumns(['action', 'images']) 
                ->make(true);
        }
    }

    public function edit(Request $request)
    {
        $id = $request->input('id');
        $intro = PageIntro::find($id);

        if (!$intro) {
            return response()->json(['error' => 'Introduction not found'], 404);
        }

        return response()->json($intro);
    }

    public function update(Request $request)
    {
       
        $request->validate([
            'id' => 'required|exists:page_introductions,id',
            'pageTitle' => 'required|string|max:255',
            'pageDescription' => 'required|string',
            'pageImages.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image files
        ]);

      
        $pageIntroId = $request->input('id');
        $pageIntroduction = PageIntro::find($pageIntroId);

        if (!$pageIntroduction) {
            return response()->json(['error' => 'Page Introduction not found'], 404);
        }

        
        $pageIntroduction->title = $request->input('pageTitle');
        $pageIntroduction->description = $request->input('pageDescription');

        
        if ($request->hasFile('pageImages')) {
            
            $oldImages = json_decode($pageIntroduction->images, true) ?? [];
            foreach ($oldImages as $oldImage) {
                if (Storage::exists('public/' . $oldImage)) {
                    Storage::delete('public/' . $oldImage);
                }
            }

            
            $newImagePaths = [];
            foreach ($request->file('pageImages') as $file) {
                $path = $file->store('page-introductions', 'public');
                $newImagePaths[] = $path;
            }

          
            $pageIntroduction->images = json_encode($newImagePaths);
        }

       
        $pageIntroduction->save();

        return response()->json(['success' => 'Page Introduction updated successfully']);
    }

    public function destroy(Request $request)
    {
        $id = $request->input('id');

        $data = PageIntro::where('id',$id)->update(['status' => 0]);

        return response()->json([$data,'success' => 'Introduction Successfully Deleted.']);
    }


}
