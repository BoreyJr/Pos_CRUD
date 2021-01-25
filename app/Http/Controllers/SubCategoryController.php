<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;
use Exception;
class SubCategoryController extends Controller
{
    public function index()
    {
        $sub_categories = SubCategory::all();
        return view('admin.sub_category.index')->with(compact('sub_categories'));
    }

    public function create()
    {

        return view('admin.sub_category.create');
    }

    public function store(Request $request)
    {
        if(isset($request->status)) {

            $request->status = $request->status == 'on' ? true : false;
        }
        SubCategory::create([
            "name" => $request->name,
            "description" => $request->description,
            "category_id" => $request->category_id,
            "status" => $request->status == 'on' ? true : false,
        ]);

        return redirect('admin/sub_category/index')
            ->with('success', 'Sub Category created successfully.');

    }

    public function show($id)
    {
        $sub_category = SubCategory::find($id);
        return view('admin.sub_category.edit',compact('sub_category'));
    }


    public function update($id,Request $request)
    {

        $data = SubCategory::find($id);

        $sub_category = [
            "name" => $request->name,
            "description" => $request->description,
            "category_id" => $request->category_id,
            "status" => $request->status == 'on' ? true : false,
        ];

        $sub_categories = $sub_categories->update($date);
        $data = $data->update($sub_category);

        return redirect('admin/sub_category/index')
            ->with('success', 'Sub Category created successfully.');

        return $this->success($data);


    }

    public function destroy($id)
    {
        try {
            SubCategory::findOrFail($id)->delete();
            return back();
        }catch (Exception $e){
            return $this->fail($e->getMessage());
        }
    }
}
