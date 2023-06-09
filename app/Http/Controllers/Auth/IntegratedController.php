<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\kategori;
use App\Models\User;
use App\Models\list_transaksi;

class IntegratedController extends Controller
{
    public function getTotalStok()
{
    $totalStock = Barang::sum('jumlah_stok');
    return $totalStock;
}
    public function getTotalKategori(){
        $jumlahKategori = kategori::count();
        return $jumlahKategori;
    }
    public function getAllAdmin(){
        $allAdmin = User::count();
        return $allAdmin;
    }
    public function getAllRiwayat(){
        $allRiwayat = list_transaksi::count();
        return $allRiwayat;
    }
    public function getTotalMerek(){
        $totalMerek = Barang::count('merek');
        return $totalMerek;
    }
    public function index()
{
    $barangs = Barang::all();
    $kategori = kategori::all();
    $totalStock = $this->getTotalStok();
    $kategoriAll = $this->getTotalKategori();
    $allAdmin = $this->getAllAdmin();
    $allMerek = $this->getTotalMerek();
    $totalTransaksi = list_transaksi::sum('nominal');
    return view('.../layout/menu', compact('barangs','kategori','totalStock', 'kategoriAll','allAdmin','allMerek','totalTransaksi'));
}
public function unauthorized()
{
    return view('.../layout/unauthorized');
}


}
