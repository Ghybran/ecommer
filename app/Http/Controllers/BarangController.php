<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;


class BarangController extends Controller
{
    function show_barang()
    {
        $barang =Barang::all();
        return view('barang',compact('barang'));
    }
    public function search(Request $request)
    {
        $keyword = $request->search;
        $barang = Barang::where( 'nama_barang', 'like', "%" . $keyword . "%")->paginate(5);
        return view('barang', compact('barang'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

}
