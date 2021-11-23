<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
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

        return view('/admin/index', compact('transaksi'), [
            "title" => "Data Transaksi"

        ]);
}
