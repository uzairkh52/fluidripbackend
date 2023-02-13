<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tagdata = Tag::all();
        $catdata = Category::all();

        // validation
        return view("auth.post.create", ['collection' => $catdata], ['tags'=>  $tagdata]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
             'title' => ['required', 'string', 'max:100'],
             'description' => ['required', 'string'],
             'category' => ['required', 'string'],
             'tags' => ['required', 'array'],
             'tags.*' => ['required', 'string'],
             'is_publish' => ['required', 'string'],
            ]
        );
        
        echo "<pre />";
        print_r($request->all());
        $post = new Post;
        $post->user_id= auth()->user()->id;
        $post-> title = $request["title"];
        $post-> description = $request["description"];
        $post-> category_id = $request["category"];
        $post-> status = $request["is_publish"];

        $result = $post->save();
        if ($result) {
            return (
                redirect("/auth/posts/create")
            );
        } else {
            return (
                redirect("/")
            );
        }
        // foreach ($request->tags as $tag) {
        //     # code...
        //     $post->tags->attach($tag);
        // }
        // return("done");



        
        // Post::create([
        //     'user_id' => auth()->user()->id,
        //     'title'=> $request->title,
        //     'description'=> $request->description,
        //     'Category_id'=> $request->category,
        //     'status'=> $request->is_publish,
        // ]);
        // return $request-> all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}