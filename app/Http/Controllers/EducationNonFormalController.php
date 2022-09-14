<?php

namespace App\Http\Controllers;

use App\Models\EducationNonFormal;
use Illuminate\Http\Request;

class EducationNonFormalController extends Controller
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
        return view('education-non.create');
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
            'kursus' => 'required',
            'tempat' => 'required',
            'tahun' => 'required',
            'ket' => 'required'
        ]);

        auth()->user()->educationNonFormal()->create($request->all());

        return redirect('/dashboard')->with('create', 'Form Sukses Di Publish');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EducationNonFormal  $educationNonFormal
     * @return \Illuminate\Http\Response
     */
    public function show(EducationNonFormal $educationNonFormal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EducationNonFormal  $educationNonFormal
     * @return \Illuminate\Http\Response
     */
    public function edit(EducationNonFormal $formal)
    {
        return view('education-non.edit', ['edu' => $formal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EducationNonFormal  $educationNonFormal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EducationNonFormal $educationNonFormal)
    {
        auth()->user()->educationNonFormal()->update($request->except(['_token', '_method']));

        return redirect('/dashboard')->with('update', 'Form Sukses Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EducationNonFormal  $educationNonFormal
     * @return \Illuminate\Http\Response
     */
    public function destroy( $educationNonFormal)
    {
        $isDeleted = EducationNonFormal::where('user_id', auth()->user()->id)->delete();

        return redirect()->back()->with('delete', 'Form Sukses Di Hapus');
    }
}
