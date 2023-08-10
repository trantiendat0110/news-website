<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewController extends Controller
{
    public function get_all()
    {
        $posts = News::all();
        $categories = Categories::all();
        $data = ['posts' => $posts, 'categories' => $categories];
        return view('pages.post', $data);
    }
    public function get_all_api()
    {
        $posts = News::all();
        $data = ['posts' => $posts];
        return response()->json($data);
    }
    public function getById($id)
    {
        $post = News::find($id);
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
            'content' => 'required',
        ]);
        $data = array(
            'title' => $request->title,
            'summary' => $request->summary,
            'content' => $request->content,
            'category' => $request->categories,
            'created_at' => date('d-m-y'),
        );
        News::create($data);
        return redirect('/posts');
    }
    public function delete(Request $request)
    {
        $id = $request->id_post;
        $res = News::find($id)->delete();
        return redirect('/posts');
    }
}