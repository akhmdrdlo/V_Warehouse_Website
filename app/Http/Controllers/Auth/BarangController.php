<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Barang;

class BarangController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::all();
        return view('../layout/barang', compact('barangs'));
    }
    public function create()
    {
        return view('../layout/tambah_barang');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'merek' => 'required',
            'jenis_barang' => 'required',
            'kategori' => 'required',
            'stok' => 'required|numeric',
            'lokasi' => 'required',
        ]);

        $barang = new Barang;
        $barang->merek = $request->input('merek');
        $barang->jenis_barang = $request->input('jenis_barang');
        $barang->kategori = $request->input('kategori');
        $barang->jumlah_stok = $request->input('stok');
        $barang->lokasi = $request->input('lokasi');
        $barang->save();

        return redirect('/barang')->with('success', 'Data Barang berhasil ditambahkan!!');
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // menampilkan halaman detail barang
        $barang = Barang::findOrFail($id);
        return view('barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
