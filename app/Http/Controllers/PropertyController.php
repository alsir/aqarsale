<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Property;
use App\Http\Requests\StorePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;
use App\Models\Area;
use App\Models\Category;
use App\Models\Image;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::orderBy('id','Desc')->get();
        $customers= Customer::all();
        $areas= Area::all();
        $categories= Category::all();

        return view('admin.property.index')
        ->with('properties',$properties)
        ->with('customers',$customers)
        ->with('areas',$areas)
        ->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.property.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePropertyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePropertyRequest $request)
    {
        $property=new Property();
        $property->customer_id = $request->customer_id;
        $property->area_id = $request->area_id;
        $property->category_id = $request->category_id;
        $property->address_ar = $request->address_ar;
        $property->address_en = $request->address_en;
        $property->description_en = $request->description_en;
        $property->description_ar = $request->description_ar;
        $property->longitude = $request->longitude;
        $property->latitude = $request->latitude;
        $property->squaresmeters = $request->squaresmeters;
        $property->bathrooms_number = $request->bathrooms_number;
        $property->bedrooms_number = $request->bedrooms_number;
        $property->halls_number = $request->halls_number;
        $property->level = $request->level;
        if ($request->hasFile('main_photo')) {
            if ($request->file('main_photo')->isValid()) {
                $path = $request->file('main_photo')->store('users','public_file');
                $property->main_photo = 'files/'.$path;
            }
        }
        $property ->save();
        toastr()->success('تم حفظ بيانات العقار  بنجاح !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property,$id)
    {
        $property=Property::find($id);
        $customer =Customer::where('id', $property->customer_id)->get();
        $images =Image::where('property_id', $property->id)->get();
        return view('admin.property.edit')
        ->with('customer',$customer)
        ->with('property',$property)
        ->with('images',$images)
        ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePropertyRequest  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropertyRequest $request, Property $property, $id)
    {
        $property= Property::find($id);
        $property->customer_id = $request->customer_id;
        $property->area_id = $request->area_id;
        $property->category_id = $request->category_id;
        $property->address_ar = $request->address_ar;
        $property->address_en = $request->address_en;
        $property->description_en = $request->description_en;
        $property->description_ar = $request->description_ar;
        $property->longitude = $request->longitude;
        $property->latitude = $request->latitude;
        $property->squaresmeters = $request->squaresmeters;
        $property->bathrooms_number = $request->bathrooms_number;
        $property->bedrooms_number = $request->bedrooms_number;
        $property->halls_number = $request->halls_number;
        $property->level = $request->level;
        if ($request->hasFile('main_photo')) {
            if ($request->file('main_photo')->isValid()) {
                $path = $request->file('main_photo')->store('users','public_file');
                $property->main_photo = 'files/'.$path;
            }
        }
        $property ->save();
        toastr()->success('تم حفظ بيانات العقار  بنجاح !!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }
}
