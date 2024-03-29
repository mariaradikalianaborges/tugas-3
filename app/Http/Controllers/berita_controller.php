<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;
use App\kategori_berita;

class artikel_controller extends Controller
{
    public function index(){
        $artikel=berita::all();

        return view('berita.index', compact('berita'));
    }

    public function show($id){
        $artikel=berita::find($id);

        return view('berita.show', compact('artikel'));
    }

    public function create(){
        $kategori_berita=kategori_berita::pluck('nama', 'id');

        return view('berita.create', compact('kategori_berita'));
    }

    public function store(Request $request){
        $input=$request->all();
        berita::create($input);

        return redirect(route('berita.index'));
    }

    public function edit($id){
        $berita=berita::find($id);
        $kategori_berita=kategori_berita::pluck('nama', 'id');

        if(empty($berita)){
            return redirect(route('berita.index'));
        }
        return view('berita.edit', compact('berita', 'kategori_berita'));
    }

    public function update($id, Request $request){
        $berita=berita::find($id);
        $input=$request->all();

        if(empty($berita)){
            return redirect(route('berita.index'));
        }
        
        $berita->update($input);
        return redirect(route('berita.index'));
    }

    public function destroy($id){
        $berita=berita::find($id);

        if(empty($berita)){
            return redirect(route('artikel.index'));
        }
        
        $berita->delete();
        return redirect(route('berita.index'));
    }
}