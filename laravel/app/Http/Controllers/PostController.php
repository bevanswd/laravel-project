<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show all posts
        $posts = Post::all();
        return view('posts/index')->withPosts($posts);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request, array(
                'fname' => 'required|max:50',
                'lname' => 'required|max:50',
                'bname' => 'required|max:50',
                'address' => 'required|max:50',
                'city' => 'required|max:50',
                'state' => 'required|max:2',
                'zip' => 'required|max:10',
                'cmail' => 'required',
                'message' => 'required|max:255'
            ));

        //ELOQUENT
        $post = new Post;
        $post->fname = $request->fname;
        $post->lname = $request->lname;
        $post->bname = $request->bname;
        $post->address = $request->address;
        $post->city = $request->city;
        $post->state = $request->state;
        $post->zip = $request->zip;
        $post->cmail = $request->cmail;
        $post->message = $request->message;
        $post->save();  

        return view('auth/login');

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
