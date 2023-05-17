<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Barang;
use App\Models\kategori;

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
        $kategori = kategori::all();
        return view('../layout/barang', compact('barangs','kategori'));
    }
    
    public function store(Request $request){
        $kategori_id = kategori::where('kategori', $request->kategori)->value('id');
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
        $barang->kategori =  $request->input('kategori');
        $barang->jumlah_stok = $request->input('stok');
        $barang->lokasi = $request->input('lokasi');
        $barang->save();

        return redirect('/barang')->with('success', 'Data Barang berhasil ditambahkan!!');
    }


    public function storeKat(Request $request){
        $kategori_id = kategori::where('kategori', $request->kategori)->value('id');
        $validatedData = $request->validate([
            'kategori' => 'required',
        ]);
        $Kategori = new kategori;
        $Kategori->kategori = $request->input('kategori');
        $Kategori->save();

        return redirect('/barang')->with('primary', 'Kategori berhasil ditambahkan!!');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::findOrFail($id); //mencari barang dengan id yang sesuai atau menampilkan 404 jika tidak ditemukan
        $kategori = kategori::all(); //mengambil semua kategori untuk ditampilkan pada dropdown
        
        return view('../layout/edit_barang', compact('barang', 'kategori'));
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
        //tarik kategori id dan ubah jadi nama kategorinya, misal id=1 dengan nama=Alat tulis maka yang ditulis akan menjadi alat tulis
        $kategori_id = kategori::where('kategori', $request->kategori)->value('id');
        $barang = Barang::findOrFail($id);
        //tarik data yang diinput user dan ubah data di database dengan inputan user tadi
        $barang->merek = $request->merek;
        $barang->jenis_barang = $request->jenis_barang;
        $barang->kategori = $request->kategori;
        $barang->jumlah_stok = $request->jumlah_stok;
        $barang->lokasi = $request->lokasi;
        $barang->save();
        
        //bila berhasil diubah, kembali ke page barang dan munculkan alert
        return redirect('/barang')->with('success', 'Data Barang berhasil diubah!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::findOrFail($id)->delete();
        return redirect('/barang')->with('warning', 'Barang berhasil dihapus.');
    }

}
