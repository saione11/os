<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

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
        // dd($brands);
         return view('backend.brands.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
          $request->validate([
            'item_name'=>'required',
            'item_photo'=>'required',
           
        ]);
        //if include file,upload
        //file upload
        $imageName=time().'.'.$request->item_photo->extension();

        $request->item_photo->move(public_path('backend/brandimg'),$imageName);
        $myfile='backend/brandimg/'.$imageName;

          // Data insert
        $brand=new Brand;
        $brand->name=$request->item_name;
        $brand->photo=$myfile;

        $brand->save();

        // Redirect
        return redirect()->route('brands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand=Brand::find($id);
        // dd($brand);
        return view('backend.brands.edit',compact('brand'));
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
          $request->validate([
           
            'item_name'=>'required',
            'newphoto'=>'sometimes',
        ]);

         if($request->hasFile('newphoto')){


        $imageName=time().'.'.$request->newphoto->extension();
        $request->newphoto->move(public_path('backend/brandimg'),$imageName);
        $myfile='backend/brandimg/'.$imageName;
        // delete old photo(unlink)
            $oldphoto=$request->oldphoto;
            unlink($oldphoto);


        }else{
             $myfile=$request->oldphoto;
        }

        // Data insert
        $brand=Brand::find($id);
        $brand->name=$request->item_name;
        $brand->photo=$myfile;
        $brand->save();

         return redirect()->route('brands.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $item=Brand::find($id);
        $item->delete();

        return redirect()->route('brands.index');
    }
}
