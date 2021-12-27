<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class KelolabarangController extends Controller
{
    public function __construct()
    {

    }

    public function index(){
        $get = Barang::get()->count();
        return view("kelolabarang");
    }

    public function tambahBarang($kodebarang, $namabarang, $kodekat, $harga, $gambar){
        
    }
}
