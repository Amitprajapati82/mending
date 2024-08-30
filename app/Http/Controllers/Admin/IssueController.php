<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Issue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;


class IssueController extends Controller
{
    //
    public function index()
    {
        $issue = Issue::where('status',1)->get();
        return view('admin.issues',compact('issue'));
    }

    public function store(Request $request)
    {
        // Retrieve the issue type from the request
        $issueType = $request->input('issueType');

        // Validate the request data
        $validator = Validator::make($request->all(), [
            'issueType' => 'required|string|max:255',
            'issueImage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }

        // Create a new Issue instance
        $issue = new Issue();
        $issue->name = $issueType;

        // Handle image upload if present
        // return 'fvhkf';
        if ($request->hasFile('issueImage')) {
            $image = $request->file('issueImage');
            $path = $image->store('images', 'public');
            $issue->image = $path; // Save the image path to the database
        }

        $issue->save();

        return response()->json(['success' => true, 'issue' => $issue, 'message' => 'Issue added successfully.']);
    }


    
    public function getIssueData(Request $request)
    {
        $id = $request->input('id');

        $issue = Issue::where('id', $id)->where('status',1)->first();

        return response()->json($issue);
    }

    
    public function destroy(Request $request)
    {
        $id = $request->input('id');

        $data = Issue::where('id',$id)->update(['status' => 0]);

        return response()->json([$data,'success' => 'Issue Successfully Deleted.']);
    }

    public function getIssuesData()
    {
        $issues = Issue::where('status',1)->select(['id', 'name','image']); // Adjust with your model and fields
        // return 'vnlcb';
        return DataTables::of($issues)
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
                return '';
            })
            ->rawColumns(['action','image'])
            ->make(true);
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $issueName = $request->input('editIssueName');
        $image = $request->file('editIssueImage'); // Handle the image file upload

        $validator = Validator::make($request->all(), [
            'id' => 'required|integer|exists:issues,id',
            'editIssueName' => 'required|string|max:255',
            'editIssueImage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Validate image file
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }

        $issue = Issue::find($id);

        if (!$issue) {
            return response()->json(['success' => false, 'message' => 'Issue not found.']);
        }

        // Update the issue name
        $issue->name = $issueName;

        // Handle the image upload
        if ($image) {
            // Delete the old image if exists
            if ($issue->image && $issue->image == null) {
                Storage::disk('public')->delete($issue->image);
            }

            // Store the new image and update the image path
            $path = $image->store('images', 'public');
            $issue->image = $path;
        }

        $issue->save();

        return response()->json(['success' => true, 'issue' => $issue, 'message' => 'Issue updated successfully.']);
    }

   
}
