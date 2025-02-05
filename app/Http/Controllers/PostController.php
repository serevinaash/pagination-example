<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        // Mengambil data dengan pagination, 10 item per halaman
        $posts = Post::paginate(10);

        // Mengembalikan data dalam bentuk JSON dengan informasi pagination
        return response()->json($posts);
    }
}
