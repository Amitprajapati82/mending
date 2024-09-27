<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\PageContent;
use App\Models\PageMainContent;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class MainContentController extends Controller
{
    //
    public function index()
    {
        return view('page.page_main_content');
    }

//     public function store(Request $request)
// {
//     // Validate the request
//     $request->validate([
//         'pageName' => 'required|string|max:255',
//         'pageTitle.*' => 'required|string|max:255',
//         'pageDescription.*' => 'required|string',
//         'pageImages.*' => 'nullable|image|max:2048',
//     ]);

//     $pageContents = [];

//     // Get input data and default to arrays if null

//     $pageTitles = $request->input('pageTitle', []); // Ensure array
//     $pageDescriptions = $request->input('pageDescription', []); // Ensure array
//     $pageImages = $request->file('pageImages') ?: []; // Ensure array

//     // DEBUG: Log the contents of the request to inspect the structure
//     \Log::info('pageTitles: ', ['pageTitles' => $pageTitles]);
//     \Log::info('pageDescriptions: ', ['pageDescriptions' => $pageDescriptions]);
//     \Log::info('pageImages: ', ['pageImages' => $pageImages]);

//     // Ensure $pageTitles and $pageDescriptions are arrays
//     if (is_array($pageTitles) && is_array($pageDescriptions)) {
//         foreach ($pageTitles as $index => $title) {
//             // Ensure corresponding description exists
//             if (!isset($pageDescriptions[$index])) {
//                 continue; // Skip if no description available for this index
//             }

//             $images = [];

//             // Ensure $pageImages is an array and handle image uploads
//             if (is_array($pageImages)) {
//                 // Check if the current index has an image
//                 if (isset($pageImages[$index]) && $pageImages[$index] instanceof \Illuminate\Http\UploadedFile) {
//                     $file = $pageImages[$index];
//                     $path = $file->store('images/page-contents', 'public');
//                     $images[] = $path;
//                 }
//             }

//             // Create a new record for each set of inputs
//             $pageContent = PageMainContent::create([
//                 'title' => $title,
//                 'description' => $pageDescriptions[$index],
//                 'images' => json_encode($images), // Convert array to JSON
//             ]);

//             $pageContents[] = $pageContent;
//         }
//     }

//     return response()->json(['message' => 'Page content saved successfully!', 'data' => $pageContents]);
// }

public function store(Request $request)
{
    // Validate the request
    $request->validate([
        // 'pageName' => 'required|string|max:255', // Parent title (if applicable)
        'pageTitle.*' => 'required|string|max:255',
        'pageDescription.*' => 'required|string',
        'pageImages.*' => 'nullable|image|max:2048',
    ]);

    // return $request->input('pageName');
    // Create the parent record (PageMain)
    // $pageContent = PageContent::create([
    //     'page_name' => $request->input('pageName'), 
    // ]);

    $pageContents = [];

    // Get input data and default to arrays if null
    $pageTitles = $request->input('pageTitle', []); // Ensure array
    $pageDescriptions = $request->input('pageDescription', []); // Ensure array
    $pageImages = $request->file('pageImages') ?: []; 
    // dd($pageImages);
    // return $pageImages;

    // Ensure $pageTitles and $pageDescriptions are arrays
    if (is_array($pageTitles) && is_array($pageDescriptions)) {
        foreach ($pageTitles as $index => $title) {
            // Ensure corresponding description exists
            if (!isset($pageDescriptions[$index])) {
                continue; // Skip if no description available for this index
            }

            $images = [];

            // Handle image uploads
            if (is_array($pageImages)) {
                if (isset($pageImages[$index]) && $pageImages[$index] instanceof \Illuminate\Http\UploadedFile) {
                    $file = $pageImages[$index];
                    $path = $file->store('images/page-contents', 'public');
                    $images[] = $path;
                }
            }

            // Create a new PageMainContent record associated with the parent PageMain
            $pageContent = PageMainContent::create([
                // 'page_content_id' => $pageContent->id, // Associate with the parent ID
                'title' => $title,
                'description' => $pageDescriptions[$index],
                'images' => json_encode($images), // Convert array to JSON
            ]);

            $pageContents[] = $pageContent;
        }
    }

    return response()->json(['message' => 'Page content saved successfully!', 'data' => $pageContents]);
}

public function edit(Request $request)
    {
        $id = $request->input('id');
        $page = PageMainContent::find($id);

        if (!$page) {
            return response()->json(['error' => 'PageMainContent not found'], 404);
        }

        return response()->json($page);
    }


    public function update(Request $request)
{
    $id = $request->id;
    // Find the existing content
    $content = PageMainContent::findOrFail($id);

    // Validate the request
    $request->validate([
        'editPageTitle' => 'required|string|max:255',
        'editPageDescription' => 'required|string',
        'editPageImages' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
    ]);

    // Update the content
    $content->title = $request->editPageTitle;
    $content->description = $request->editPageDescription;

    // Handle image upload (if a new image is uploaded)
    if ($request->hasFile('editPageImages')) {
        $imagePath = $request->file('editPageImages')->store('public/images');
        $content->images = json_encode([$imagePath]); // Assuming images are stored as JSON
    }

    // Save the updated content
    $content->save();

    // Return success response
    return response()->json(['message' => 'Content updated successfully']);
}

public function getData(Request $request)
{
    if ($request->ajax()) {
        
        $data = PageMainContent::where('status',1)->
           get();

        
        return DataTables::of($data)
            ->make(true); 
    }


    return response()->json(['message' => 'Invalid request'], 400);
}

public function destroy(Request $request)
    {
        $id = $request->input('id');

        $data = PageMainContent::where('id',$id)->update(['status' => 0]);

        return response()->json([$data,'success' => 'PageMain Successfully Deleted.']);
    }









    
}
