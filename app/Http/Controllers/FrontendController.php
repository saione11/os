<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Subcategory;

class FrontendController extends Controller
{
    public function home($value='')
    {
    	// $items=Item::take(6)->get();
    	$items=Item::orderBy('id','desc')->take(6)->get();
    	// dd($items);
    	return view('frontend.home',compact('items'));
    }

    public function frontitem($value='')
    {
        $subcategories= Subcategory::take(3)->get();
        // $items=Item::orderBy('id','desc')->take(8)->get();
    	return view('frontend.items',compact('subcategories'));
	}

	 public function detail($id='')
    {
         $item=Item::find($id);
        // dd($item);
       
    	return view('frontend.detail',compact('item'));
	}

	public function register($value='')
    {
    	return view('frontend.register');
	}

	public function login($value='')
    {
    	return view('frontend.login');
	}
	public function profile($value='')
    {
    	return view('frontend.profile');
	}
	public function checkout($value='')
    {
    	return view('frontend.checkout');
	}
    public function getItems(Request $request)
    {
        $sid=$request->sid;
        if($sid==0){
            $items=Item::all();
        }else{
            $items=Subcategory::find($sid)->items;
        }
        return $items;
       
    }

}
