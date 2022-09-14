<?php

namespace App\Http\Controllers;

use App\Models\DataWorker;
use Illuminate\Http\Request;

class DataWorkerController extends Controller
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
        return view('worker.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'nama' => 'required',
            'tgl_mulai' => 'required',
            'tgl_akhir' => 'required',
            'jabatan' => 'required',
            'gaji' => 'required',
            'uraian' => 'required',
            'answer' => 'required',
        ]);

        auth()->user()->postDataWorker()->create($request->all());
        return redirect('/dashboard')->with('create', 'Form Sukses Di Publish');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataWorker  $dataWorker
     * @return \Illuminate\Http\Response
     */
    public function show(DataWorker $dataWorker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataWorker  $dataWorker
     * @return \Illuminate\Http\Response
     */
    public function edit(DataWorker $worker)
    {
        return view('worker.edit', ['wk' => $worker]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataWorker  $dataWorker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataWorker $dataWorker)
    {
        auth()->user()->postDataWorker()->update($request->except(['_token', '_method']));
        return redirect('/dashboard')->with('update', 'Form Sukses Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataWorker  $dataWorker
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataWorker $dataWorker)
    {
        DataWorker::where('user_id', auth()->user()->id)->delete();

        return redirect()->back()->with('delete', 'Form Sukses Di Hapus');
    }
}
