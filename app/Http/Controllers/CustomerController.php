<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = customer::all();
        return view('admin.customer.index')->with(['customer' => $customer]);;
    }

    public function create()
    {
        return view('admin.customer.create');
    }

    public function store(Request $request)
    {

        Customer::create([
            "name" => $request->name,
            "phone_number" => $request->phone,
            "email" => $request->email,
            "address" => $request->address,

        ]);

        return redirect('admin/customer/index')
            ->with('success', 'Customer  created successfully.');

    }

    public function show($id)
    {}

    public function update($id,Request $request)
    {}

    public function destroy($id)
    {}
}
