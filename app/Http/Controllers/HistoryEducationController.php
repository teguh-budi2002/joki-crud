<?php

namespace App\Http\Controllers;

use App\Models\HistoryEducation;
use Illuminate\Http\Request;

class HistoryEducationController extends Controller
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
        return view('education.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       auth()->user()->historyPosts()->create($request->all());

       return redirect('dashboard')->with('create', 'Form Sukses Di Publish');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HistoryEducation  $historyEducation
     * @return \Illuminate\Http\Response
     */
    public function show(HistoryEducation $historyEducation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HistoryEducation  $historyEducation
     * @return \Illuminate\Http\Response
     */
    public function edit(HistoryEducation $education)
    {
        return view('education.edit', ['post' => $education]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HistoryEducation  $historyEducation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HistoryEducation $historyEducation)
    {
        auth()->user()->historyPosts()->update($request->except(['_token', '_method']));

        return redirect('dashboard')->with('update', 'Form Sukses Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HistoryEducation  $historyEducation
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $isDeleted = HistoryEducation::where('user_id', auth()->user()->id)->delete();

        return redirect()->back()->with('delete', 'Form Sukses Di Hapus');
    }
}
