<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use \Carbon\Carbon;
use App\Post;
use App\Category;
class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $posts=Post::where('user_id',$user->id)->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post;
        $boton = "Crear";
        $categories = Category::All();
        return view('posts.create')->with(['categories' => $categories, 'post' => $post, 'btnText' => $boton]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request -> input('title');
        $post->excerpt = $request -> input('excerpt');
        $post->body = $request -> input('body');
        $post->image = $request -> input('img');
        $post->user_id = Auth::user()->id;
        $post->category_id = $request -> get('category');
        $post->save();
        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $this->authorize('view', $post);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::All();
        $boton = "Editar";
        $post=Post::find($id);
        return view('posts.edit')->with(['categories' => $categories, 'post' => $post, 'btnText' => $boton]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request -> input('title');
        $post->excerpt = $request -> input('excerpt');
        $post->body = $request -> input('body');
        $post->image = $request -> input('img');
        $post->user_id = Auth::user()->id;
        $post->category_id = $request -> get('category');
        $post->save();
        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect(route('posts.index'));
    }
}
