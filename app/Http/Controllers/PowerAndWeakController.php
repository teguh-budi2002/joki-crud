<?php

namespace App\Http\Controllers;

use App\Models\PowerAndWeak;
use Illuminate\Http\Request;

class PowerAndWeakController extends Controller
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
        return view('pw.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        auth()->user()->PWPost()->create($request->all());

        return redirect('dashboard')->with('create', 'Terimakasih Telah Menjawab Pertanyaan Kami');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PowerAndWeak  $powerAndWeak
     * @return \Illuminate\Http\Response
     */
    public function show(PowerAndWeak $powerAndWeak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PowerAndWeak  $powerAndWeak
     * @return \Illuminate\Http\Response
     */
    public function edit(PowerAndWeak $weak)
    {
        return view('pw.edit', ['pw' => $weak]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PowerAndWeak  $powerAndWeak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PowerAndWeak $powerAndWeak)
    {
        auth()->user()->PWPost()->update($request->except(['_token', '_method']));

        return redirect('dashboard')->with('update', 'Jawaban Anda Telah Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PowerAndWeak  $powerAndWeak
     * @return \Illuminate\Http\Response
     */
    public function destroy(PowerAndWeak $powerAndWeak)
    {
        PowerAndWeak::where('user_id', auth()->user()->id)->delete();

        return redirect()->back()->with('delete', 'Jawabanmu Sukses Di Hapus');
    }
}
