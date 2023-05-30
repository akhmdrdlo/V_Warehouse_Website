<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Barang;
use App\Models\kategori;
use App\Models\list_transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllRiwayat(){
        $allRiwayat = list_transaksi::count();
        return $allRiwayat;
    }
    public function getAllTotalTransaksi(){
        $totalTransaksi = list_transaksi::sum('nominal');
        return $totalTransaksi;
    }
    
    public function index()
    {
        $barangs = Barang::all();
        $kategori = kategori::all();
        $transaksis = list_transaksi::all();
        $allRiwayat = $this->getAllRiwayat();
        $totalTransaksi = $this->getAllTotalTransaksi();
        return view('../layout/transaksi', compact('barangs','kategori','transaksis', 'allRiwayat', 'totalTransaksi'));
    }

    public function beli($id)
    {
        $barang = Barang::findOrFail($id); //mencari barang dengan id yang sesuai atau menampilkan 404 jika tidak ditemukan
        $kategori = kategori::all(); //mengambil semua kategori untuk ditampilkan pada dropdown
        
        return view('../layout/tambah_transaksi', compact('barang', 'kategori'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $validatedData = $request->validate([
            'merek'=>'required',
            'nama'=>'required',
            'jumlah_transaksi'=>'required|numeric',
        ]);

        // Mengambil harga dari tabel barang berdasarkan ID barang
        $barang = Barang::find($id);
        $harga = $barang->harga;
        $jumlahTransaksi = $request->input('jumlah_transaksi');
        // Menghitung total nominal harga
        $totalNominalHarga = $jumlahTransaksi * $harga;

        $transaksi = new list_transaksi;
        $transaksi->tgl_transaksi = $request->input('tgl_transaksi');
        $transaksi->merek = $request->input('merek');
        $transaksi->nama =  $request->input('nama');
        $transaksi->jumlah_transaksi = $jumlahTransaksi;
        $transaksi->nominal = $totalNominalHarga;
        $transaksi->save();

        return redirect('/transaksi')->with('success', 'Transaksi berhasil,Terimakasih udah berbelanja!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
