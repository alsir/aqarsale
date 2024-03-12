<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Property;
use App\Http\Requests\StoreAreaRequest;
use App\Http\Requests\UpdateAreaRequest;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = Area::orderBy('id','Desc')->get();

        return view('admin.area.index')
        ->with('areas',$areas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.area.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAreaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAreaRequest $request)
    {
        $area=new Area();
        $area->area_ar = $request->area_ar;
        $area->area_en = $request->area_en;
        $area ->save();
        toastr()->success('تم حفظ بيانات المنطقة بنجاح !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function show(Area $area , $id)
    {
        $properties= Property::where('area_id', $id)->get();
        $area = Area::find($id);
        return view('admin.category.show')->with('area', $area)
        ->with('properties', $properties);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function edit(Area $area , $id)
    {
        $area = area::find($id);
        return view('admin.area.edit')->with('area', $area);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAreaRequest  $request
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAreaRequest $request, Area $area ,$id)
    {
        $area=area::find($id);
        $area->area_ar = $request->area_ar;
        $area->area_en = $request->area_en;
        $area ->save();
        toastr()->success('تم حفظ بيانات المنطقة بنجاح !!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function destroy(Area $area ,$id)
    {
        $area =  Area::find($id)->delete();
            toastr()->success('تم حذف بيانات المنطقة بنجاح !!');
            return back();
    }
}
