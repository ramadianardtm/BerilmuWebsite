<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\Category;
use App\Http\Requests\StorepostRequest;
use App\Http\Requests\UpdatepostRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $posts = post::latest();
        $Keyword = $request->Keyword;
        // dd($Keyword);
        // if (request('search')){
        //     $posts->where('title', 'like', '%' . request('search') . '%');
        // }
        
        $posts = Post::where('judul', 'LIKE', '%' . $Keyword . '%')
                // ->orwhere('category', 'LIKE', '%' . $Keyword . '%')             
                ->paginate(6);
        
        return view('searchpage', ['posts' => $posts]);
        // return view ('searchpage', [
        //     "posts" => $post,
        //     "title" => "searchpage",
        //     "searchpage" => Post::all()
        // ]);
    }
    
    public function downloadfunc(Request $request, $perangkat)
    {
       return response()->download(public_path('storage/'.'perangkat'.$perangkat));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        // // $posts = post::all();
        // $class = Category::all();

        // return view ('posts', [
        //     'class' => $class]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        $posts = DB::table('posts')->get();
        return view('searchpage', ['posts' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepostRequest  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepostRequest $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        //
    }
}
