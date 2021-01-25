<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return view('admin.item.index');
    }

    public function create()
    {
        return view('admin.item.create');
    }

    public function store(Request $request)
    {}

    public function show($id)
    {}

    public function update($id,Request $request)
    {}

    public function destroy($id)
    {}
}
