<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\StorePropertyRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Http\Requests\UpdateImageRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Http\Requests\UpdatePropertyRequest;
use App\Models\Area;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Image;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function getAreas()
    {
        $areas = Area::all();
        return response()->json($areas);
    }
    public function getCategories()
    {
        $categories = Category::all();
        return response()->json($categories);
    }
    
    public function getCustomers()
    {
        $customers = Customer::all();
        return response()->json($customers);
    }

    public function getCustomer($id)
    {
        $customer = Customer::find($id);
        if (!$customer) {
            return response()->json(['error' => 'Customer not found'], 404);
        }
        return response()->json($customer);
    }
    public function storeCustomer(StoreCustomerRequest $request)
    {
    $customer = new Customer();
    $customer->name = $request->input('name');
    $customer->phone_number = $request->input('phone_number');
    $customer->password = Hash::make($request->input('phone_number'));
    $customer->save();
    return response()->json($customer, 201);
    }
    public function UpdateCustomer(UpdateCustomerRequest $request, $id)
    {
    $customer = Customer::findOrFail($id);
    $customer->name = $request->input('name');
    $customer->phone_number = $request->input('phone_number');
    $customer->password = Hash::make($request->input('phone_number'));
    $customer->save();
    return response()->json($customer, 201);
    }
    public function getProperties()
    {
        $properties = Property::all();
        $images = Image::all();
        return response()->json($properties ,$images );
    }

    public function getProperty($id)
    {
        $property = Property::find($id);
        $images = Image::where('Property_id', $property->id)->get();
        if (!$property) {
            return response()->json(['error' => 'property not found'], 404);
        }
        return response()->json($property,$images );
    }
    public function storeProperty(StorePropertyRequest $request)
    {
    $property = new Property();
    if ($request->hasFile('main_photo')) {
        if ($request->file('main_photo')->isValid()) {
            $path = $request->file('main_photo')->store('users','public_file');
            $property->main_photo = 'files/'.$path;
        }
    }
    $property->area_id = $request->input('area_id');
    $property->category_id = $request->input('category_id');
    $property->customer_id = $request->input('customer_id');
    $property->address_ar = $request->input('address_ar');
    $property->address_en = $request->input('address_en');
    $property->description_ar = $request->input('description_ar');
    $property->description_en = $request->input('description_en');
    $property->bedrooms_number = $request->input('bedrooms_number');
    $property->bathrooms_number = $request->input('bathrooms_number');
    $property->longitude = $request->input('longitude');
    $property->latitude = $request->input('latitude');
    $property->squaresmeters =$request->input('squaresmeters');
    $property->halls_number = $request->input('halls_number');
    $property->level = $request->input('level');
    $property->save();
    return response()->json($property, 201);
    }
    public function updateProperty(UpdatePropertyRequest $request, $id)
    {
    $property = Property::findOrFail($id);
    $property->area_id = $request->input('area_id');
    if ($request->hasFile('main_photo')) {
        if ($request->file('main_photo')->isValid()) {
            $path = $request->file('main_photo')->store('users','public_file');
            $property->main_photo = 'files/'.$path;
        }
    }
    $property->category_id = $request->input('category_id');
    $property->customer_id = $request->input('customer_id');
    $property->address_ar = $request->input('address_ar');
    $property->address_en = $request->input('address_en');
    $property->description_ar = $request->input('description_ar');
    $property->description_en = $request->input('description_en');
    $property->bedrooms_number = $request->input('bedrooms_number');
    $property->bathrooms_number = $request->input('bathrooms_number');
    $property->longitude = $request->input('longitude');
    $property->latitude = $request->input('latitude');
    $property->squaresmeters =$request->input('squaresmeters');
    $property->halls_number = $request->input('halls_number');
    $property->level = $request->input('level');
    $property->save();
    return response()->json($property, 201);
    }
    public function getImages()
    {
        $images = Image::all();
        return response()->json($images);
    }

    public function getImage($id)
    {
        $image = Image::find($id);
        if (!$image) {
            return response()->json(['error' => 'image not found'], 404);
        }
        return response()->json($image);
    }
    public function storeImage(StoreImageRequest $request)
    {
    $image = new Image();
    if ($request->hasFile('url')) {
        if ($request->file('url')->isValid()) {
            $path = $request->file('url')->store('users','public_file');
            $image->url = 'files/'.$path;
        }
    }
    $image->property_id = $request->input('property_id');
    $image->save();
    return response()->json($image, 201);
    }
    public function updateImage(UpdateImageRequest $request, $id)
    {
    $image = Image::findOrFail($id);
    if ($request->hasFile('url')) {
        if ($request->file('url')->isValid()) {
            $path = $request->file('url')->store('users','public_file');
            $image->url = 'files/'.$path;
        }
    }
    $image->property_id = $request->input('property_id');
    $image->save();
    return response()->json($image, 201);
    }
    public function destroy($id)
    {
        $property = Property::findOrFail($id);
        $images = Image::where('property_id', $id)->get();
        $images->delete();
        $property->delete();
        return response()->json(null, 204);
    }
    public function deleteImage($id)
    {
        $image = Image::findOrFail($id);
        $image->delete();
        return response()->json(null, 204);
    }
    

}
