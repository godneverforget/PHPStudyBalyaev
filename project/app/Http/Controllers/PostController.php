<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getAll($order = 'date', $dir = 'desc')
    {
        $validOrders = ['id', 'title', 'date'];
        $validDirs = ['asc', 'desc'];

        if (!in_array($order, $validOrders)) {
            $order = 'date';
        }

        if (!in_array($dir, $validDirs)) {
            $dir = 'desc';
        }

        $posts = Post::orderBy($order, $dir)->get();
        return view('posts.all', compact('posts'));
    }

    public function getOne($id)
    {
        try {
            $post = Post::findOrFail($id);
            return view('posts.one', compact('post'));
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public function newPost()
    {
        return view('posts.new');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'text' => 'required',
            'date' => 'required|date',
        ]);

        Post::create($request->all());

        return redirect()->route('posts.all')->with('success', 'Новая статья успешно создана.');
    }

    public function editPost($id)
    {
        $post = Post::findOrFail($id);

        if (request()->has('submit')) {
            $this->validate(request(), [
                'title' => 'required',
                'desc' => 'required',
                'text' => 'required',
                'date' => 'required|date',
            ]);

            $post->update(request()->all());

            return redirect()->route('posts.all')->with('success', 'Статья успешно обновлена.');
        }

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'text' => 'required',
            'date' => 'required|date',
        ]);

        $post = Post::findOrFail($id);
        $post->update($request->all());

        return redirect()->route('posts.all')->with('success', 'Статья успешно обновлена.');
    }

    public function delPost($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.all')->with('success', 'Статья успешно удалена.');
    }
}
