<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    //
    public function index()
    {
        // $data=[
        //     'kategori_kode'=>'SNK',
        //     'kategori_nama'=>'Scank/makanan ringan',
        //     'created_at'=>now()
        // ];
        // DB::table('m_kategori')->insert($data);
        // return 'data berhasil ditambah';

        //update data
        // $row=DB::table('m_kategori')->where('kategori_kode','SNK')->update(['kategori_nama'=>'Camilan']);
        // return 'update data berhasil, jumlah data yg terupdate'.$row. 'baris';

        //hapus data
        // $data = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
        // return 'delete data berhasil, jumlah data yg terhapus ' . $data . ' baris';

        //tampildata
        $data=DB::table('m_kategori')->get();
        return view('kategori',['data'=>$data]);
    }
}
