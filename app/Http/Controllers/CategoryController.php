<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Categories::all();
        $data = array('categories' => $category);
        return view('pages.categories', compact('data'));
    }
    public function getById($id)
    {
        $post = DB::table('tin')->select()->where('id', '=', $id)->get()->first();
        $data = ['post' => $post];
        return view('pages.chitiettin', $data);
    }
    public function getByCategory($category)
    {
        if ($category == 'xemnhieu') {
            $data = DB::table('tin')->select()->orderBy('xem', 'desc')->limit(10)->get();
        }
        if ($category == 'moinhat') {
            $data = DB::table('tin')->select()->orderBy('ngayDang', 'desc')->limit(10)->get();
        }
        if ($category == 'loai1') {
            $data = DB::table('tin')->select()->where('loaiTin', '=', $category)->get();
        }
        if ($category == 'loai2') {
            $data = DB::table('tin')->select()->where('loaiTin', '=', $category)->get();
        }
        if ($category == 'loai3') {
            $data = DB::table('tin')->select()->where('loaiTin', '=', $category)->get();
        }
        $posts = ['posts' => $data];
        return view('pages.tin', $posts);
    }
    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);
        $data = array(
            'title' => $request->title,
            'created_at' => date('d-m-y'),
        );
        Categories::create($data);
        return redirect('/categories');
    }
    public function delete(Request $request)
    {
        $id = $request->id_category;
        $res = Categories::find($id)->delete();
        return redirect('/categories');
    }
}