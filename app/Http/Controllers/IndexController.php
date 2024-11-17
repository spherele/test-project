<?php

namespace App\Http\Controllers;

use App\Models\Index;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $indices = Index::active()->get();

        return view('pages.index', compact('indices'));
    }

//    public function show($slug)
//    {
//        $index = Index::where('slug', $slug)->firstOrFail();
//
//        return view('index.show', compact('index'));
//    }
}
