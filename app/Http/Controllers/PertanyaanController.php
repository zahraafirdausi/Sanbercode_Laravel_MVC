<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use destroy;

class PertanyaanController extends Controller
{
    public function create(){
        return view('crud.formpertanyaan');
    }

    public function store(request $request){
        //untuk ngecek datanya masuk tidak
        //dd($request->all());
        $request->validate([
            'judul' => 'required',
            'isi'   => 'required'
        ]);
        $query = DB::table('pertanyaan')->insert([
            'judul' => $request["judul"],
            'isi' => $request["isi"]
        ]);
        return redirect('/pertanyaan')->with('success', 'Berhasil Membuat Pertanyaan!');

    }

    public function index(){
        $pertanyaan = DB::table('pertanyaan')->get();
        //dd($pertanyaan);
        return view('crud.indexpertanyaan', compact('pertanyaan'));
    }

    public function show($id){
        $pertanyaans = DB::table('pertanyaan')->where('id', $id)->first();
        //dd($pertanyaans);
        return view('crud.showpertanyaan', compact('pertanyaans'));


    }

    public function edit($id){
        $pertanyaans = DB::table('pertanyaan')->where('id', $id)->first();
        return view('crud.editpertanyaan', compact('pertanyaans'));
    }

    public function update($id, request $request){
        $request->validate([
            'judul' => 'required',
            'isi'   => 'required'
        ]);

        $query = DB::table('pertanyaan')
                    ->where('id', $id)
                    ->update([
                        'judul' => $request['judul'],
                        'isi'   => $request['isi']
                    ]);
        return redirect('/pertanyaan')->with('success', 'Berhasil Update!');

    }

    public function destroy($id){
        $query = DB::table('pertanyaan')->where('id', $id)->delete();
        return redirect('/pertanyaan')->with('success', 'Berhasil Dihaspus!');
    }
}
