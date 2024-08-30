<?php

namespace App\Http\Controllers\Admin;

use App\Category as AppCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use Yajra\DataTables\Facades\DataTables;
use PhpParser\Node\Expr\Cast;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $data = Category::where('status',1)->get();
        // return $data;
        return view('admin.categories',compact('data'));
    }

    public function store(Request $request)
    {
        $name =  $request->input('name');
        $description =  $request->input('description');

        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }

        $category = new Category();
        $category->name = $name;
        $category->description = $description;
        $category->save();

        return response()->json(['success' => true, 'category' => $category, 'message' => 'Category added successfully.']);

    }

    public function getCategoryData(Request $request)
    {
        $id = $request->input('id');
        
        $data = Category::where('id',$id)->where('status',1)->first();
        
        return response()->json([$data,'Success' => 'Succesfully get data.']);
    }

    public function update(Request $request)
    {
        $id = $request->input('editCategoryId');
        $name = $request->input('editCategoryName');
        
        $description = $request->input('editCategoryDescription');

        $validator = Validator::make($request->all(), [
            'editCategoryName' => 'required|string|max:255',
            'editCategoryDescription' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }

        $category = Category::find($id);
        // return $category;

        if (!$category) {
            return response()->json(['success' => false, 'message' => 'Category not found.']);
        }else
        {
            // return $name;
            $category->name = $name;
            $category->description = $description;
            $category->save();

            return response()->json(['success' => true, 'category' => $category, 'message' => 'Category updated successfully.']);
        }
    }

    public function destroy(Request $request)
    {
        $id = $request->input('id');

        $data = Category::where('id',$id)->update(['status' => 0]);

        return response()->json([$data,'success' => 'Category Successfully Deleted.']);
    }

    public function getAllCategoryData()
    {
        $data = Category::where('status',1)->select('id', 'name', 'description');

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                return '<a href="javascript:void(0);" data-id="' . $row->id . '" class="btn btn-warning editCategory" data-bs-toggle="modal" data-bs-target="#editCategoryModal">Edit</a>
                        <a href="javascript:void(0);" data-id="' . $row->id . '" class="btn btn-danger deleteCategory">Delete</a>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
