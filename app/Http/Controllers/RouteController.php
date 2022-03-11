<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class RouteController extends Controller
{
    public function index()
    {
        $category = Category::select('id','name','img','icon')->where('is_active',1)->get();
        return view('index',compact('category'));
    }
    public function category()
    {
        return view('category');
    }
    public function contact()
    {
        return view('contact');
    }
    public function ad_details()
    {
        return view('ad-details');
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
}
