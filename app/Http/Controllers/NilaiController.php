<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index(){
        $nilai = Nilai::all();
        return view('nilai.index',compact(['nilai']));
    }

    public function create()
    {
        return view('nilai.create');
    }

    public function store(Request $request)
    {

        Nilai::create($request->except(['_token','submit']));
        return redirect('/');
    }

    public function edit($id)
    {
        $nilai = Nilai::find($id);
        return view('nilai.edit',compact(['nilai']));
    }

    public function update($id, Request $request)
    {
        $nilai = Nilai::find($id);
        $nilai->update($request->except(['_token','submit']));
        return redirect('/');
    }
    
    public function destroy($id)
    {
        $nilai = Nilai::find($id);
        $nilai->delete();
        return redirect('/');
    }
}
