<?php

namespace App\Http\Controllers;

use App\Models\SecondPost;
use Illuminate\Http\Request;

class SecondPostController extends Controller
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
        return view('secondPost.create');
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
            'ayah' => 'required',
            'gender' => 'required',
            'tempat' => 'required',
            'tgl_lahir' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'ibu'    => 'required',
            'gender_ibu' => 'required',
            'tempat_ibu' => 'required',
            'tgl_lahir_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
        ]);

        auth()->user()->secondPosts()->create($request->all());

        return redirect('/dashboard')->with('create', 'Form Sukses Di Publish');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SecondPost  $secondPost
     * @return \Illuminate\Http\Response
     */
    public function show(SecondPost $secondPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SecondPost  $secondPost
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataFamily = SecondPost::where('id', $id)->first();
        return view('secondPost.edit', ['post' => $dataFamily]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SecondPost  $secondPost
     * @return \Illuminate\Http\Response
     */
    public function updateForm(Request $request, SecondPost $secondPost)
    {
        $validating = $request->validate([
            'ayah' => 'required',
            'gender' => 'required',
            'tempat' => 'required',
            'tgl_lahir' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'ibu'    => 'required',
            'gender_ibu' => 'required',
            'tempat_ibu' => 'required',
            'tgl_lahir_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
        ]);

        auth()->user()->secondPosts()->update($request->except(['_token', '_method']));

        return redirect('/dashboard')->with('update', 'Form Sukses Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SecondPost  $secondPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(SecondPost $secondPost)
    {
        $isDeleted = SecondPost::where('user_id', auth()->user()->id)->delete();

        return redirect()->back()->with('delete', 'Form Sukses Di Hapus');
    }
}
