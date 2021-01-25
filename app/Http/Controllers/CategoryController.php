<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index')->with(compact('categories'));
    }

    public function create()
    {

        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        if(isset($request->status)) {

            $request->status = $request->status == 'on' ? true : false;
        }
        category::create([
            "name" => $request->name,
            "description" => $request->description,
            "status" => $request->status == 'on' ? true : false,
        ]);

        return redirect('admin/category/index')
            ->with('success', 'Category created successfully.');

    }

    public function show($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit')->with(compact('category'));
    }


    public function update($id,Request $request,SubCategory $sub_category)
    {
        $sub_category->update($request->all());

        return redirect()->route('admin.sub_category.index')
            ->with('success','Post updated successfully');


    }

    public function destroy($id)
    {
        try {
            Category::findOrFail($id)->delete();
            return back();
        }catch (Exception $e){
            return $this->fail($e->getMessage());
        }
    }
}
