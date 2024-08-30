<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\PageMainContent;
use Illuminate\Http\Request;

class MainContentController extends Controller
{
    //
    public function index()
    {
        return view('page.page_main_content');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'pageTitle.*' => 'required|string|max:255',
            'pageDescription.*' => 'required|string',
            'pageImages.*' => 'nullable|image|max:2048',
        ]);

        $pageContents = [];

        
        $pageTitles = $request->input('pageTitle', []);
        $pageDescriptions = $request->input('pageDescription', []);
        $pageImages = $request->file('pageImages', []);
        // Ensure $pageTitles and $pageDescriptions are arrays
        if (is_array($pageTitles) && is_array($pageDescriptions)) {
            foreach ($pageTitles as $index => $title) {
                // Ensure corresponding description exists
                if (!isset($pageDescriptions[$index])) {
                    
                    continue; // Skip if no description available for this index
                }

                $images = [];

                // Ensure $pageImages is an array
                if (is_array($pageImages)) {
                    // Check if the current index has an image
                    if (isset($pageImages[$index]) && $pageImages[$index] instanceof \Illuminate\Http\UploadedFile) {
                        $file = $pageImages[$index];
                        $path = $file->store('images/page-contents', 'public');
                        $images[] = $path;
                    }
                }

                // Create a new record for each set of inputs
                $pageContent = PageMainContent::create([
                    'title' => $title,
                    'description' => $pageDescriptions[$index],
                    'images' => json_encode($images), // Convert array to JSON
                ]);

                $pageContents[] = $pageContent;
            }
        }
            
        return response()->json(['message' => 'Page content saved successfully!', 'data' => $pageContents]);
    }





    
}
