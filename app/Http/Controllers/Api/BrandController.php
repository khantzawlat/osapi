<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Brand;
use App\Http\Resources\BrandResource;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $brands=Brand::all();
       return BrandResource::collection($brands);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  $request->validate([
        //     'id'=>'required',
        //     'name'=>'required',
            


        // ]);
        // //if include file,upload
        //   $imageName=time().'.'.$request->photo->extension();
        // $request->photo->move(public_path('backend/brandimg'),$imageName);
        // $myfile='backend/brandimg/'.$imageName;
        // //data insert
        // $item=new Brand;
        // $item->id=$request->id;
        // $item->name=$request->name;
        // $item->photo=$myfile;
        
        // $item->save();
        // //redirect4
        // return new BrandResource($item);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $brand=Brand::find($id);
       return new BrandResource($brand);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
