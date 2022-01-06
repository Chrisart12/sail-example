<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PlaceholderAPIController extends Controller
{
    public function index()
    {

        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        $posts = $response->collect();

        return view('placeholderApi.index', compact('posts'));
    }
}
