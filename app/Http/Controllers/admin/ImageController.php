<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;
use App\Models\Property;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::orderBy('id','Desc')->get();

        return view('admin.image.index')
        ->with('images',$images)
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.image.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImageRequest $request)
    {
        $image=new Image();
        if ($request->hasFile('url')) {
            if ($request->file('url')->isValid()) {
                $path = $request->file('url')->store('users','public_file');
                $image->url = 'files/'.$path;
            }
        }
        $image->property_id = $request->property_id;
        $image ->save();
        toastr()->success('تم حفظ الصورة  بنجاح !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image ,$id)
    {
        $image=Image::find($id);
        $property =Property::where('id', $image->property_id)->get();
        return view('admin.image.edit')
        ->with('image',$image)
        ->with('property',$property)
        ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image ,$id)
    {
        $image=Image::find($id);
        return view('admin.image.edit')
        ->with('image',$image);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImageRequest  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImageRequest $request, Image $image, $id)
    {
        $image=Image::find($id);
        if ($request->hasFile('url')) {
            if ($request->file('url')->isValid()) {
                $path = $request->file('url')->store('users','public_file');
                $image->url = 'files/'.$path;
            }
        }
        $image->property_id = $request->property_id;
        $image ->save();
        toastr()->success('تم حفظ الصورة  بنجاح !!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image , $id)
    {
        $image =  Image::find($id)->delete();
         toastr()->success('تم حذف  الصورة بنجاح !!');
        return back();
    }
}
