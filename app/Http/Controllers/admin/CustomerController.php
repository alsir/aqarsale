<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Property;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Customers = Customer::orderBy('id','Desc')->get();

        return view('admin.customer.index')
        ->with('Customer',$Customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        $customer=new Customer();
        $customer->name = $request->name;
        $customer->phone_number = $request->phone_number;
        $customer->password = Hash::make($request->password);
        $customer ->save();
        toastr()->success('تم حفظ بيانات العميل  بنجاح !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer , $id)
    {
        $customer=Customer::find($id);
        $properties = Property::where('customer_id',$id)->get();
        return view('admin.customer.show')
        ->with('customer',$customer)
        ->with('properties',$properties)
        ;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer,$id)
    {
        $customer=Customer::find($id);
        return view('admin.customer.edit')->with('customer',$customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRequest  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, Customer $customer,$id)
    {
        $customer= Customer::find($id);
        $customer->name = $request->name;
        $customer->phone_number = $request->phone_number;
        if(isset($request->password) && $request->password != null)
        {
            $customer->password =  Hash::make($request->password);
        }
        $customer ->save();
        toastr()->success('تم حفظ بيانات العميل  بنجاح !!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
