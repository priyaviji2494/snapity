<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\ProductFields;

class PostAdController extends Controller
{
    public function index(Request $request)
    {
        $category = Category::select('id','name','img','icon')->where('is_active',1)->get();
        $subcategory = SubCategory::select('id','subcategory_name','category_id')->where('is_active',1)->get();
        $cat_subcat = Category::with(['cat_subcat'])->get();
        $category_id = $request->category;
        $subcategory_id = $request->subcategory;
        $category_name=[];$subcategory_name=[];$fields=[];
        if(!empty($category_id)){
            $category_name = Category::select('id','name','img','icon')->where('is_active',1)->where('id',$category_id)->get();
        }
        if(!empty($subcategory_id)){
            $subcategory_name = SubCategory::select('id','subcategory_name','category_id')
                ->where('is_active',1)->where('id',$subcategory_id)->get();
            $fields = ProductFields::where('is_active',1)->where('sub_category_id',$subcategory_id)->get();
        }
        return view('create-ad',compact('category','subcategory','cat_subcat','category_name','subcategory_name','fields'));
    }
}
