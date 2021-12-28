<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class KelolabarangController extends Controller
{
    public function __construct()
    {

    }

    public function index(){
        $get = Barang::get();
       
        return view("kelolabarang", compact('get'));
    }

    public function tambahBarang(Request $req){
    	$validated = Validator::make($req->all(),['gambar' => 'required|images|mimes:jpg,png,jpeg']);
        $kb = $req->input('kodebarang');
        $nb = $req->input('namabarang');
        $kk = $req->input('kategori');
        $hg = $req->input('harga');
        $gambar = $kb."_".$nb.date("mdy").".png";

        $add = DB::table('barang')->insert(['kodebarang' => $kb, 'namabarang' => $nb, 'kategori' => $kk, 'harga' => $hg, 'gambar' => $gambar]);
        
        $req->file('gambar')->move(public_path('gambar'), $gambar);
    }

    public function edit($id){
    	$get1 = Barang::get();
    	$get = Barang::find($id)->first();
    	return view('kelolabarang', ['get' => $get1, 'edit' => $get]);
    }
}
