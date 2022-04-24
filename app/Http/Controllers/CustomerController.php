<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create()

    {
        $url = url('/customer');
        $data = compact('url');
        return view('customer')->with($data);
    }
    public function store(Request $request)
    {
        // p($request->all());
        // die;
        //insert query
        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->address = $request['address'];
        $customer->phonenumber = $request['phonenumber'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);
        $customer->save();
        return redirect('/customer');
    }
    public function view()
    {
        $customers = Customer::all();
        $data = compact('customers');
        return view('customer-view')->with($data);
    }

    public function trash()
    {
        $customers = Customer::onlyTrashed()->get();
        $data = compact('customers');
        return view('customer-trash')->with($data);
    }

    public function delete($id)
    {
        $customer = Customer::find($id);
        if (!is_null($customer)) {
            $customer->delete();
        }
        return redirect('customer');
    }
    public function forceDelete($id)
    {
        $customer = Customer::withTrashed()->find($id);
        if (!is_null($customer)) {
            $customer->forceDelete();
        }
        return redirect()->back();
    }


    public function restore($id)
    {
        $customer = Customer::withTrashed($id);
        if (!is_null($customer)) {
            $customer->restore();
        }
        return redirect('customer');
    }
    public function edit($id)
    {
        $customer = Customer::find($id);
        if (is_null($customer)) {
            return redirect('customer');
        } else {
            $url = url('/customer/update') . "/" . $id;
            $data = compact('customer', 'url');
            return view('customer')->with($data);
        }
    }
    public function update($id, Request $request)
    {
        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->address = $request['address'];
        $customer->phonenumber = $request['phonenumber'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);
        $customer->save();
        return redirect('/customer');
    }
}
