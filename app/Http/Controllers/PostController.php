<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DateTime;

class PostController extends Controller
{
    public function index(Request $request, Post $post)
    {
        $sort_params=$request->input('sort_tag');
        if($sort_params==null){
            $posts = Post::where("user_id", Auth::user()->id)->whereNull("completed_dateTime")->orderBy('created_at', 'DESC')->paginate(4);
        }elseif($sort_params=='deadline_dateTime'){
            $posts = Post::where("user_id", Auth::user()->id)->whereNull("completed_dateTime")->orderBy($sort_params, 'ASC')->paginate(4);
        }else{
            $posts = Post::where("user_id", Auth::user()->id)->whereNull("completed_dateTime")->orderBy($sort_params, 'DESC')->paginate(4);
        }
        return view('posts.index')->with(['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
    //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }

    //public function create()
    //{
        //return view('posts.create');
    //}

    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        $input['user_id']=Auth::user()->id;
        $input['deadline_dateTime']=Carbon::parse($input['deadline_dateTime'])->format('Y-m-d H:i:00'); //難しい
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }

    public function create(Category $category)
    {
        return view('posts.create')->with(['categories' => $category->get()]);
    }

    public function index_categorize_page(Category $category)
    {
        return view('posts.categorize')->with(['categories' => $category->get()]);
    }

    Public function store_new_category(Request $request, Category $category)
    {
        $input = $request['category'];
        $category->fill($input)->save();
        return redirect('/posts');
    }

    public function complete(Post $post)
    {
        $posts = Post::where("user_id", Auth::user()->id)->whereNotNull("completed_dateTime")->get();
        return view('posts.complete')->with(['posts' => $posts]);
    }

    public function check(Post $post)
    {
        $post->completed_dateTime = new DateTime();
        $post->save();
        return back();
    }

    public function back(Post $post)
    {
        $post->completed_dateTime = null;
        $post->save();
        return back();
    }

    public function delete(Post $post)
    {
        $post->delete();
        return back();
    }
}
?>