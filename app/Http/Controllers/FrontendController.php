<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        $areas = Area::all();
        $categories = Category::all();
        $properties = Property::all();
        return view('frontend.index')
        ->with('areas', $areas)
        ->with('categories', $categories)
        ->with('properties', $properties);
        
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $areas = Area::all();
        $categories = Category::all();
        $properties = Property::where('address_en', 'LIKE', "%$query%")
        ->orwhere('address_ar', 'LIKE', "%$query%")
        ->orWhere('description_en', 'LIKE', "%$query%")
        ->orWhere('description_ar', 'LIKE', "%$query%")
        ->get();
        return view('frontend.index')
        ->with('areas', $areas)
        ->with('categories', $categories)
        ->with('properties', $properties);
        
    }
    public function filter(Request $request)
    {
       
    }
    public function details($id)
    {
       $property= Property::find($id);
       return view('frontend.details')->with('property',$property);
    }
    public function map()
    {
        $areas = Area::all();
        $categories = Category::all();
        $properties = Property::all();
        return view('frontend.map')
        ->with('areas', $areas)
        ->with('categories', $categories)
        ->with('properties', $properties);
    }
    public function profile()
    {
        $cutomer= Customer::where('id' , Auth::id())->get();
        return view('frontend.customer.profile')
        ->with('cutomer', $cutomer);
    }
    public function properties()
    {
        $properties= Property::where('customer_id' , Auth::id())->get();
        return view('frontend.customer.profile')
        ->with('properties', $properties);
    }

}
