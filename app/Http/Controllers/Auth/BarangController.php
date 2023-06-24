<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Barang;
use App\Models\kategori;
use App\Models\log;

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
            'kategori' => 'required',
            'stok' => 'required|numeric',
            'lokasi' => 'required',
            'harga' => 'required|numeric',
        ]);
        $barang = new Barang;
        $barang->merek = $request->input('merek');
        $barang->kategori =  $request->input('kategori');
        $barang->jumlah_stok = $request->input('stok');
        $barang->harga = $request->input('harga');
        $barang->lokasi = $request->input('lokasi');
        $barang->save();

        $log = new log();
        $log->merek = $request->input('merek');
        $log->uname = Auth::user()->uname;
        $log->jumlah = '+'.$request->input('stok');
        $log->proses = "TAMBAH STOK";
        $log->save();

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
        if($barang->jumlah_stok >= $request->jumlah_stok){
            $stok = $barang->jumlah_stok - $request->jumlah_stok;
            $finalstok = '-'.$stok;
        }else if($barang->jumlah_stok <= $request->jumlah_stok){
            $stok = $request->jumlah_stok - $barang->jumlah_stok;
            $finalstok = '+'.$stok;
        }
        //tarik data yang diinput user dan ubah data di database dengan inputan user tadi
        $barang->merek = $request->merek;
        $barang->kategori = $request->kategori;
        $barang->jumlah_stok = $request->jumlah_stok;
        $barang->harga = $request->harga;
        $barang->lokasi = $request->lokasi;
        $barang->save();
        
        $log = new log();
        $log->merek = $barang->merek;
        $log->uname = Auth::user()->uname;
        $log->jumlah = $finalstok;
        $log->proses = "UPDATE STOK";
        $log->save();
        
        //bila berhasil diubah, kembali ke page barang dan munculkan alert
        return redirect('/barang')->with('success', 'Data Barang berhasil diubah!!');
    }

    public function tampillog(){
        $logs = log::all();
        return view('../layout/logbarang', compact('logs'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $barang=Barang::findOrFail($id);
        $stok = $barang->jumlah_stok;
        $barang->delete();

        $finalstok = '-'.$stok;
        $log = new log();
        $log->merek = $barang->merek;
        $log->uname = Auth::user()->uname;
        $log->jumlah = $finalstok;
        $log->proses = "HAPUS STOK";
        $log->save();

        return redirect('/barang')->with('warning', 'Barang berhasil dihapus.');
    }

    public function destroylog($id){
        log::findOrFail($id)->delete();
        return redirect('/logbarang')->with('warning', 'Record berhasil dihapus.');
    }
}
