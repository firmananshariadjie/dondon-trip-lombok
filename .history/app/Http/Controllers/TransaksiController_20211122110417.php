<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TransaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $data = DB::table('transaksis')
            ->join('produks', 'transaksis.id_transaksi', '=', 'produks.id_produk')
            ->select(
                'transaksis.id_transaksi as id_trs',
                'transaksis.nama_pelanggan as nama',
                'transaksis.no_wa as no_wa',
                'transaksis.total_pembayaran as total',
                'transaksis.status as status',
                'transaksis.created_at as tanggal',
                'produks.id_produk as id_prd',
                'produks.kategori as kategori',
                'produks.nama_produk as nama_prdk',
                'produks.harga_produk as harga_prdk'
            )
            ->get();

        $transaksi = json_decode($data, true);

        return view('/admin/transaksi/index', compact('transaksi'), [
            "title" => "Data Transaksi"

        ]);
    }

    public function store(Request $request) //Done 
    {

        $valid_data = $request->validate([
            'kategori' => 'required',
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'gambar' => 'image|file',
            'deskripsi' => 'required|max:255'
        ]);

        if ($request->file('gambar')) {
            $valid_data['gambar'] = $request->file('gambar')->store('produk-jasa');
        }

        Produk::create($valid_data);
        return redirect('/produk')->with('toast_success', 'Data Berhasil Ditambah!');
    }
}
