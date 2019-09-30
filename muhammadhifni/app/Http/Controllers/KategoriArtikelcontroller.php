<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelcontroller extends Controller
{
    public function index (){
        $listKategoriArtikel=KategoriArtikel::all();

        // return $listKategoriArikel;
        return view('kategori_artikel.index',compact('listKategoriArtikel'));
    }

        public function show ($id){

            // $listKategoriArtikel=KategoriArtikel::where('id',$id)->first();
            $KategoriArtikel=KategoriArtikel::find($id);

            return view('kategori_artikel.show',compact('KategoriArtikel'));

        }

}
