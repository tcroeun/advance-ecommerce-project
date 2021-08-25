<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function BrandView(){
        $brands = Brand::latest()->get();
        return view('backend.brand.brand_view',compact('brands'));
    }
    public function BrandStore(Request $request){
        $request->validate([
            'brand_name_en' => 'required',
            'brand_name_kh' => 'required',
            'brand_image' => 'required',
        ],[
            'brand_name_en.required' => 'Input Brand English Name',
            'brand_name_kh.required' => 'Input Brand Khmer Name'
        ]);
        $image = $request->file('brand_image');
        $name_gen = hexdec(uniqid()).'.'.
    }
}
