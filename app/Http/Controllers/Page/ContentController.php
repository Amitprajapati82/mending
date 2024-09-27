<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\PageIntro;
use App\Models\PageBanner;
use App\Models\PageContent;
use App\Models\PageMainContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Yajra\DataTables\DataTables;


class ContentController extends Controller
{
    public function index()
    {
        $banner = PageBanner::where('status',1)->get();
        $introduction = PageIntro::where('status',1)->get();
        // return $introductuction;
        return view('page.page_content',compact('banner','introduction'));
    }
    public function showForm()
    {
        $banner = PageBanner::where('status',1)->get();
        $introduction = PageIntro::where('status',1)->get();
        $title = PageMainContent::where('status',1)->get();
        // return $title;
        return view('page.page_form',compact('banner','introduction','title'));
    }

    // public function store(Request $request)
    // {
    //     // Validate the request
    //     $request->validate([
    //         'pageName' => 'required|string|max:255',
    //         'bannerId' => 'nullable|exists:page_banners,id',
    //         'introId' => 'nullable|exists:page_introductions,id',
    //         'titleId' => 'nullable|exists:page_main_contents,id',
    //         'pageTitle.*' => 'required|string|max:255',
    //         'pageDescription.*' => 'required|string',
    //         'pageImages.*' => 'nullable|image|max:2048', // Validate images if provided
    //         'metaTitle' => 'nullable|string|max:255',
    //         'metaDescription' => 'nullable|string',
    //         'metaKeywords' => 'nullable|string|max:255',
    //     ]);

    //     // Handle image uploads
    //     $images = [];
    //     if ($request->hasFile('pageImages')) {
    //         foreach ($request->file('pageImages') as $file) {
    //             $path = $file->store('images/page-contents', 'public');
    //             $images[] = $path;
    //         }
    //     }

    //     // Store the data
    //     foreach ($request->input('pageTitle') as $index => $title) {
    //         $imagePath = isset($images[$index]) ? $images[$index] : null;
    //         PageContent::create([
    //             'page_name' => $request->input('pageName'),
    //             'banner_id' => $request->input('bannerId'),
    //             'intro_id' => $request->input('introId'),
    //             'page_main_content_id' => $request->input('titleId'),
    //             'title' => $title,
    //             'description' => $request->input('pageDescription')[$index],
    //             'images' => $imagePath ? json_encode([$imagePath]) : json_encode([]), // Save images
    //             'meta_title' => $request->input('metaTitle'),
    //             'meta_description' => $request->input('metaDescription'),
    //             'meta_keywords' => $request->input('metaKeywords'),
    //         ]);
    //     }

    //     return response()->json(['message' => 'Page content saved successfully!']);
    // }

    public function store(Request $request)
    {
        // dd($request->all());
        // return $request->input('titleId');
        // Validate the request
        $request->validate([
            'pageName' => 'required|string|max:255',
            'bannerId' => 'nullable|exists:page_banners,id',
            'introId' => 'nullable|exists:page_introductions,id',
            'titleId' => 'nullable|exists:page_main_contents,id',
            // 'pageTitle' => 'required|string|max:255', // Only one title
            // 'pageDescription' => 'required|string', // Only one description
            // 'pageImages.*' => 'nullable|image|max:2048', // Validate images if provided
            'metaTitle' => 'nullable|string|max:255',
            'metaDescription' => 'nullable|string',
            'metaKeywords' => 'nullable|string|max:255',
        ]);
//  dd($request->all());
        // Handle image uploads (can handle multiple images but saves as one record)
        $images = [];
        if ($request->hasFile('pageImages')) {
            foreach ($request->file('pageImages') as $file) {
                $path = $file->store('images/page-contents', 'public');
                $images[] = $path;
            }
        }

        // Store the single record in the PageContent table
        $pageContent = PageContent::create([
            'page_name' => $request->input('pageName'),
            'banner_id' => $request->input('bannerId'),
            'intro_id' => $request->input('introId'),
            'page_main_content_id' => $request->input('titleId'),
            // 'title' => $request->input('pageTitle'), // Save single title
            // 'description' => $request->input('pageDescription'), // Save single description
            // 'images' => json_encode($images), // Save images as JSON (array)
            'meta_title' => $request->input('metaTitle'),
            'meta_description' => $request->input('metaDescription'),
            'meta_keywords' => $request->input('metaKeywords'),
        ]);

        return response()->json(['message' => 'Page content saved successfully!', 'data' => $pageContent]);
    }

    public function edit($id)
    {
        $page = PageContent::findOrFail($id);

        $banner = PageBanner::where('status',1)->get();
        $introduction = PageIntro::where('status',1)->get();
        $title = PageMainContent::where('status',1)->get();
        // return $pageContent;
        return view('page.page_edit', compact('page','banner','introduction','title'));
    }

    public function update(Request $request)
    {
        // return $request->all();
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'pageName' => 'required|string|max:255',
            'bannerId' => 'required|exists:page_banners,id', // Assuming 'banners' is the table name
            'introId' => 'required|exists:page_introductions,id', // Assuming 'introductions' is the table name
            'titleId' => 'required|exists:page_main_contents,id', // Assuming 'titles' is the table name
            'metaTitle' => 'required|string|max:255',
            'metaDescription' => 'required|string',
            'metaKeywords' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Find the record you want to update, e.g., by ID
        // return $request->id;
        $page = PageContent::find($request->page_id); // Make sure to send the ID from the form

        if (!$page) {
            return response()->json(['error' => 'Record not found.'], 404);
        }

        // Update the record with new data
        $page->page_name = $request->pageName;
        $page->banner_id = $request->bannerId;
        $page->intro_id = $request->introId;
        $page->page_main_content_id = $request->titleId;
        $page->meta_title = $request->metaTitle;
        $page->meta_description = $request->metaDescription;
        $page->meta_keywords = $request->metaKeywords;
        
        $page->save(); // Save the changes

        // Return a success response
        return response()->json(['success' => 'Changes updated successfully!']);
    }
    public function getContentData(Request $request)
    {
        // return 'gvjc';die;
        if ($request->ajax()) {
            $data = PageContent::with('banner','intro','PageMainContent')->where('status',1)->get();
            // return $data;
            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    $editBtn = '<a href="' . route('pagecontent.edit', $row->id) . '" class="btn btn-sm btn-primary">Edit</a>';
                    $deleteBtn = '<button class="btn btn-sm btn-danger deleteBtn" data-id="' . $row->id . '">Delete</button>';
                    return $editBtn . ' ' . $deleteBtn;
                })
                ->rawColumns(['action'])  
                ->make(true);
        }

        return view('Page.page_content');  
    }

    public function destroy(Request $request)
    {
        $id = $request->input('id');

        $data = PageContent::where('id',$id)->update(['status' => 0]);

        return response()->json([$data,'success' => 'Page Successfully Deleted.']);
    }


    
}
