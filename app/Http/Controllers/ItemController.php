<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Brand;
use App\Subcategory;

class ItemController extends Controller
{
   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Item::all();
        // dd($items);
        return view('backend.items.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands=Brand::all();
        $subcategories=Subcategory::all();
        return view('backend.items.create',compact('brands','subcategories'));

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
            'item_codeno'=>'required|min:4',
            'item_name'=>'required',
            'item_photo'=>'required',
            'unit_price'=>'required',
            'discount_price'=>'required',
            'item_des'=>'required',
            'brand_id'=>'required',
            'subcategory_id'=>'required'
        ]);
        //if include file,upload
        //file upload
        $imageName=time().'.'.$request->item_photo->extension();
        $request->item_photo->move(public_path('backend/itemimg'),$imageName);
        $myfile='backend/itemimg/'.$imageName;

        // Data insert
        $item=new Item;
        $item->codeno=$request->item_codeno;
        $item->name=$request->item_name;
        $item->photo=$myfile;
        $item->price=$request->unit_price;
        $item->discount=$request->discount_price;
        $item->description=$request->item_des;
        $item->brand_id=$request->brand_id;
        $item->subcategory_id=$request->subcategory_id;
        $item->save();

        // Redirect
        return redirect()->route('items.index');








     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item=Item::find($id);
        // dd($item);
       return view('backend.items.show',compact('item'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brands=Brand::all();
        $subcategories=Subcategory::all();
        $item=Item::find($id);
        // dd($item);
        return view('backend.items.edit',compact('brands','subcategories','item'));
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
        // dd($request);

         $request->validate([
            'item_codeno'=>'required|min:4',
            'item_name'=>'required',
            'item_photo'=>'sometimes',
            'unit_price'=>'required',
            'discount_price'=>'required',
            'item_des'=>'required',
            'brand_id'=>'required',
            'subcategory_id'=>'required'
        ]);

         if($request->hasFile('item_photo')){


        $imageName=time().'.'.$request->item_photo->extension();
        $request->item_photo->move(public_path('backend/itemimg'),$imageName);
        $myfile='backend/itemimg/'.$imageName;
        // delete old photo(unlink)
            $oldphoto=$request->oldphoto;
            unlink($oldphoto);


        }else{
             $myfile=$request->oldphoto;
        }

        // Data insert
        $item=Item::find($id);
        $item->codeno=$request->item_codeno;
        $item->name=$request->item_name;
        $item->photo=$myfile;
        $item->price=$request->unit_price;
        $item->discount=$request->discount_price;
        $item->description=$request->item_des;
        $item->brand_id=$request->brand_id;
        $item->subcategory_id=$request->subcategory_id;
        $item->save();

         return redirect()->route('items.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Item::find($id);
        $item->delete();

        return redirect()->route('items.index');
    }
}
