<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        
        $posts = News::all();
        $categories = Categories::all();
        $data = array(
            'posts' => $posts, 
            'categories' => $categories
        );
        return view('pages.home', compact('data'));
    }
}