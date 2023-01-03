<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FormPostController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'judul' => ['required'],
            'ket' => ['required'],
            'perangkat' => ['required'],
        ]);

        $post = new post();
        $post->user_id = Auth::user()->id;
        $post->judul = $request->judul;
        $post->ket = $request->ket;

        $extension = $request->file("perangkat")->getClientOriginalExtension();
        $stringPaperFormat = str_replace(" ", "", $request->input('judul'));
        $fileName = $stringPaperFormat . "." . $extension;
        $FileEnconded =  File::get($request->perangkat);
        Storage::disk('local')->put('public/perangkat' . $fileName, $FileEnconded);

        $post->perangkat = $fileName;
        $post->save();

        return redirect('/searchpage');
    }
    public function create()
    {
        $class = Category::select('id', 'name')->get();

        return view('posts', [
            'class' => $class
        ]);
    }

    // public function store(Request $request)
    // {
    //     $post = new post;
    //     $post->title = $request->title;
    //     $post->category = $request->category;
    //     $post->excerpt = $request->excerpt;
    //     $post->save();

    // }
}
