<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Salary;
use App\Models\User;
use App\Models\DataWorker;
use App\Models\SecondPost;
use App\Models\PowerAndWeak;
use Illuminate\Http\Request;
use App\Models\PostCommunity;
use App\Models\InterestAndHope;
use App\Models\HistoryEducation;
use App\Models\EducationNonFormal;
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
        $getHomeInfo = array();
        $getHomeInfo = Post::where('user_id', auth()->user()->id)->first();
        return view('dashboard.index', [
            'userPosts' => Post::with('users')->where('user_id', Auth::id())->first(),
            'secondPosts' => SecondPost::with('users')->where('user_id', Auth::id())->get(),
            'postCommunity' => PostCommunity::where('user_id', Auth::id())->first(),
            'history' => HistoryEducation::where('user_id', Auth::id())->first(),
            'edu' => EducationNonFormal::where('user_id', Auth::id())->first(),
            'worker' => DataWorker::where('user_id', Auth::id())->first(),
            'io' => InterestAndHope::where('user_id', Auth::id())->first(),
            'pw' => PowerAndWeak::where('user_id', Auth::id())->first(),
            'salary' => Salary::where('user_id', Auth::id())->first(),
            'tmpt_lahir' => $getHomeInfo
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validating = $request->validate([
            'nama' => 'required',
            'tempat_lahir'    => 'required',
            'tanggal_lahir' => 'required',
            'usia'  => 'required',
            'jenis_kelamin' => 'required',
            'suku' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'hobi' => 'required',
        ]);
        $validating['user_id'] = auth()->user()->id;
        Post::create($validating);
        return redirect('/dashboard')->with('create', 'Form Sukses Di Publish');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.edit', [
            'posts' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $validating = $request->validate([
            'nama' => 'required',
            'tempat_lahir'    => 'required',
            'tanggal_lahir' => 'required',
            'usia'  => 'required',
            'jenis_kelamin' => 'required',
            'suku' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'hobi' => 'required',
        ]);
        $isUpdated = Post::where('user_id', auth()->user()->id)->update($validating);
        return redirect('/dashboard')->with('update', 'Form Sukses Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $isDeleted = Post::where('user_id', auth()->user()->id)->delete();

        return redirect()->back()->with('delete', 'Form Sukses Di Hapus');
    }
}
