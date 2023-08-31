<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class RegbarangController extends Controller
{

    public function index()
    {
        return view('upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'filename' => 'required',
            'filename.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000'
        ]);
        if ($request->hasfile('filename')) {
            $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('filename')->getClientOriginalName());
            $request->file('filename')->move(public_path('/'), $filename);
             Barang::create(
                    [
                        'nama_barang' => $request->nama_barang,
                        'harga_barang' => $request->harga_barang,
                        'description' =>$request->description,
                        'img_barang' =>$filename
                    ]
                );
            return redirect('barang');
        }else{
            echo'Gagal';
        }

    }

}
