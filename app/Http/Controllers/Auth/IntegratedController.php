<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\kategori;
use App\Models\User;

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
    public function index()
{
    $totalStock = $this->getTotalStok();
    $kategoriAll = $this->getTotalKategori();
    $allAdmin = $this->getTotalKategori();
    return view('.../layout/menu', compact('totalStock', 'kategoriAll','allAdmin'));
}

}
