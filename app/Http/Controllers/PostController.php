<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\comment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = post::all();
        return view('Post.Post',compact(['data']));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Post.Postform');
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
// dd($request);
        // $request->validate([
        //     'FileImg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        // ]);
        // $request->validate([
        //     'name'=>'required',
        //     'email'=>'required|email',
        //     'phone'=>'required'
        // ]);



        post::create([
            
            'FileImg' => $request->FileImg,
            'PostMes'  => $request->PostMes,
            'username' => Auth::id(),
        ]);


        return redirect('/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        // return view('comment.PostComment',compact(['data']));
        $data=post::find($id);
        return view('Post.PostComment',compact(['data']),[
            'user' => post::findOrFail($id),
            'commentData' => comment::where('post_holder', $id)->get(),
            'userComment' => User::all()
        ]);
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
