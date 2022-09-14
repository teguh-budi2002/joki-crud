<?php

namespace App\Http\Controllers;

use App\Models\InterestAndHope;
use Illuminate\Http\Request;

class InterestAndHopeController extends Controller
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
        return view('IH.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        auth()->user()->IOPost()->create($request->all());

        return redirect('dashboard')->with('create', 'Terimakasih Telah Menjawab Pertanyaan Kami');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InterestAndHope  $interestAndHope
     * @return \Illuminate\Http\Response
     */
    public function show(InterestAndHope $interestAndHope)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InterestAndHope  $interestAndHope
     * @return \Illuminate\Http\Response
     */
    public function edit(InterestAndHope $minat)
    {
        return view('IH.edit', ['io' => $minat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InterestAndHope  $interestAndHope
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InterestAndHope $interestAndHope)
    {
        auth()->user()->IOPost()->update($request->except(['_token', '_method']));

        return redirect('dashboard')->with('update', 'Jawaban Anda Telah Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InterestAndHope  $interestAndHope
     * @return \Illuminate\Http\Response
     */
    public function destroy($interestAndHope)
    {
        InterestAndHope::where('user_id', auth()->user()->id)->delete();

        return redirect()->back()->with('delete', 'Jawabanmu Sukses Di Hapus');
    }
}
