<?php

namespace App\Http\Controllers;

use App\Models\CoreFamily;
use Illuminate\Http\Request;

class CoreFamilyController extends Controller
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
        return view ('family.create');
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
            'couple' => 'required',
            'jns_klmn' => 'required',
            'tmpt_lhr' => 'required',
            'tgl_lhr' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
        ]);

        auth()->user()->coreFamily()->create($request->all());

        return redirect('/dashboard')->with('create', 'Form Sukses Di Publish');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CoreFamily  $coreFamily
     * @return \Illuminate\Http\Response
     */
    public function show(CoreFamily $coreFamily)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CoreFamily  $coreFamily
     * @return \Illuminate\Http\Response
     */
    public function edit(CoreFamily $core)
    {
        return view ('family.edit', ['core' => $core]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CoreFamily  $coreFamily
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CoreFamily $coreFamily)
    {
        auth()->user()->coreFamily()->update($request->except(['_token', '_method']));

        return redirect('/dashboard')->with('update', 'Form Sukses Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CoreFamily  $coreFamily
     * @return \Illuminate\Http\Response
     */
    public function destroy($coreFamily)
    {
        $isDeleted = CoreFamily::where('user_id', auth()->user()->id)->delete();

        return redirect()->back()->with('delete', 'Form Sukses Di Hapus');
    }
}
