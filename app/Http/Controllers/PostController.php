<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //　一覧ページ
    public function index() {
        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    // 作成ページ
    public function create() {
        return view('posts.create');
    }

    // 作成機能
    public function store(Request $request) {
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return redirect()->route('posts.index')->with('flash_message', '投稿が完了しました。');
    }

    // 詳細ページ
    public function show(Post $post) {
        return view('posts.show', compact('post'));
    }
}
