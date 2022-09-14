<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostCommunity;
use Illuminate\Support\Facades\Auth;

class PostCommunityController extends Controller
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
        return view('postCommunity.create');
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
           'organisasi' => 'required',
           'tahun' => 'required',
           'jabtan' => 'required'
       ]);

       auth()->user()->postCommunities()->create($request->all());

       return redirect('dashboard')->with('create', 'Form Sukses Di Publish');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostCommunity  $postCommunity
     * @return \Illuminate\Http\Response
     */
    public function show(PostCommunity $postCommunity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostCommunity  $postCommunity
     * @return \Illuminate\Http\Response
     */
    public function edit(PostCommunity $community)
    {
        return view('postCommunity.edit', ['post' => $community]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostCommunity  $postCommunity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostCommunity $postCommunity)
    {
        $validating = $request->validate([
            'organisasi' => 'required',
            'tahun' => 'required',
            'jabtan' => 'required'
        ]);

        auth()->user()->postCommunities()->update($request->except(['_token', '_method']));

        return redirect('dashboard')->with('update', 'Form Sukses Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostCommunity  $postCommunity
     * @return \Illuminate\Http\Response
     */
    public function destroy($community)
    {
       PostCommunity::where('user_id', Auth::id())->delete();

       return redirect('dashboard')->with('delete', 'Form Sukses Dihapus');
    }
}
