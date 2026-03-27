<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use App\Http\Requests\StoreblogsRequest;
use App\Http\Requests\UpdateblogsRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = blogs::with('user:id,name')->get()->pluck('user')->unique('id')->values();
        $blogs = blogs::with('user:id,name');
        $order_by = $request->order_by ?? 'id';
        $order = $request->order ?? 'asc' ;

        if ($request->search_blog) {
            $blogs = $blogs->where('title', 'like', '%' . $request->search_blog . '%');
        }

        if ($request->user_id) {
            $blogs = $blogs->where('user_id', $request->user_id);
        }

        $blogs = $blogs->orderBy($order_by, $order)
            ->paginate(3)
            ->onEachSide(1)
            ->withQueryString();
            
        // if ($request->order=="asc") {
        //     if ($request->search_blog) {
        //         $blog_title = $request->search_blog;
        //         $blogs = blogs::where('title',$blog_title)->orderBy($order_by)->paginate(3)->onEachSide(1);
        //     }
        //     if ($request->user_id) {
        //         $user_id = $request->user_id;
        //         $blogs = blogs::where('user_id',$user_id)->orderBy($order_by)->paginate(3)->onEachSide(1);
        //     }
        //     if ($request->user_id && $request->search_blog) {
        //         $blogs = blogs::where('title',$blog_title)->where('user_id',$user_id)->orderBy($order_by)->paginate(3)->onEachSide(1);
        //     }
        // }

        // if ($request->order=="desc") {
        //     if ($request->search_blog) {
        //         $blog_title = $request->search_blog;
        //         $blogs = blogs::where('title',$blog_title)->orderByDesc($order_by)->paginate(3)->onEachSide(1);
        //     }
        //     if ($request->user_id) {
        //         $user_id = $request->user_id;
        //         $blogs = blogs::where('user_id',$user_id)->orderByDesc($order_by)->paginate(3)->onEachSide(1);
        //     }
        //     if ($request->user_id && $request->search_blog) {
        //         $blogs = blogs::where('title',$blog_title)->where('user_id',$user_id)->orderByDesc($order_by)->paginate(3)->onEachSide(1);
        //     }
        // }

        
        // $blogs = blogs::paginate(3)->onEachSide(1);
        return view('blogs',compact('blogs','users'));
        // $blogs=blogs::get();
        // return $request;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreblogsRequest $request)
    {
        $path = $request->file('blogimg')->store('photos/blogimages', 'public');
        $user_id = Auth::user()->id;
        blogs::create([
                "title" => $request->title,
                "content" => $request->content,
                "blogimg" => $path,
                "user_id" => $user_id,
            ]);

        return redirect('/blogs');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(blogs $blogs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blogs $blogs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateblogsRequest $request, blogs $blogs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blogs $blogs)
    {
        //
    }
}
