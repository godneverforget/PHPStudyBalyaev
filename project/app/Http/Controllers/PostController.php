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

    public function index()
    {
        $posts = [
            [
                "id" => 1,
                "tittle" => "Name",
                "desc" => " Description",
                "text" => "Text",
                "date" => "Date"
            ],
            [
                "id" => 2,
                "tittle" => "Name",
                "desc" => " Description",
                "text" => "Text",
                "date" => "Date"
            ]
        ];

        return $posts;
    }

    public function show($id)
    {
        $posts = [
            [
                "id" => 1,
                "tittle" => "Name",
                "desc" => " Description",
                "text" => "Text",
                "date" => "Date"
            ],
            [
                "id" => 2,
                "tittle" => "Name",
                "desc" => " Description",
                "text" => "Text",
                "date" => "Date"
            ]
        ];

        return $posts[$id-1];
    }

    public function store_(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'text' => 'required',
            'date' => 'required|date',
        ]);

        $post = Post::create($request->all());

        return response()->json($post, 201);
    }

    public function update_(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'text' => 'required',
            'date' => 'required|date',
        ]);

        try {
            $post = Post::findOrFail($id);
            $post->update($request->all());
            return response()->json($post, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Post not found'], 404);
        }
    }

    public function destroy($id)
    {
        try {
            $post = Post::findOrFail($id);
            $post->delete();
            return response()->json(['message' => 'Post deleted successfully'], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Post not found'], 404);
        }
    }
}
