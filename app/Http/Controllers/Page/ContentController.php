<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\PageIntro;
use App\Models\PageBanner;
use App\Models\PageContent;
use Illuminate\Http\Request;

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
        // return $introductuction;
        return view('page.page_form',compact('banner','introduction'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'pageName' => 'required|string|max:255',
            'bannerId' => 'nullable|exists:page_banners,id',
            'introId' => 'nullable|exists:page_introductions,id',
            'pageTitle.*' => 'required|string|max:255',
            'pageDescription.*' => 'required|string',
            'pageImages.*' => 'nullable|image|max:2048', // Validate images if provided
            'metaTitle' => 'nullable|string|max:255',
            'metaDescription' => 'nullable|string',
            'metaKeywords' => 'nullable|string|max:255',
        ]);

        // Handle image uploads
        $images = [];
        if ($request->hasFile('pageImages')) {
            foreach ($request->file('pageImages') as $file) {
                $path = $file->store('images/page-contents', 'public');
                $images[] = $path;
            }
        }

        // Store the data
        foreach ($request->input('pageTitle') as $index => $title) {
            $imagePath = isset($images[$index]) ? $images[$index] : null;
            PageContent::create([
                'page_name' => $request->input('pageName'),
                'banner_id' => $request->input('bannerId'),
                'intro_id' => $request->input('introId'),
                'title' => $title,
                'description' => $request->input('pageDescription')[$index],
                'images' => $imagePath ? json_encode([$imagePath]) : json_encode([]), // Save images
                'meta_title' => $request->input('metaTitle'),
                'meta_description' => $request->input('metaDescription'),
                'meta_keywords' => $request->input('metaKeywords'),
            ]);
        }

        return response()->json(['message' => 'Page content saved successfully!']);
    }

    
}
