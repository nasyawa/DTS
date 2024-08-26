<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class LevelController extends Controller
{
    public function index()
    {
        $activeMenu = 'level'; //set menu yg sedang aktif
        $breadcrumb = (object)[
            'title' => 'Daftar Level',
            'list' => ['Home', 'Level']
        ];
        $page = (object)[
            'title' => 'Daftar level yang terdaftar dalam sistem'
        ];
        return view('level.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
        // return view('level.index')
        //     ->with('activeMenu', $activeMenu)
        //     ->with('breadcrumb', $breadcrumb);
    }

    public function list(Request $request)
    {
        $level = DB::table('m_level');

        return DataTables::of($level)
            ->addIndexColumn()
            ->addColumn('aksi', function ($level) {
                $btn = '<a href="' . url('/level/' . $level->level_id) . '" class="btn btn-info btn-sm">Detail</a> ';
                $btn .= '<a href="' . url('/level/' . $level->level_id . '/edit') . '" class="btn btn-warning btn-sm">Edit</a> ';
                $btn .= '<form class="d-inline-block" method="POST" action="' .
                    url('/level/' . $level->level_id) . '">'
                    . csrf_field() . method_field('DELETE') .
                    '<button type="submit" class="btn btn-danger btn-sm" 
            onclick="return confirm(\'Apakah Anda yakit menghapus data 
            ini?\');">Hapus</button></form>';
                return $btn;
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }
    // public function index()
    // {
    //     $activeMenu = 'level';
    //     $breadcrumb = (object)[
    //         'title' => ' Level User ',
    //         'list' => ['Home', 'Level']
    //     ];
    //     return view('level.index')
    //         ->with('activeMenu', $activeMenu)
    //         ->with('breadcrumb,$breadcrumb');
    // }

    // DB::insert('insert into m_level (level_kode, level_nama, created_at) values (?, ?, ?)', ['CUS', 'Pelanggan', now()]);
    // return 'Insert data baru berhasil';
    // $row = DB::update('update m_level set level_nama= ? where level_kode= ?', 
    // ['customer', 'CUS']);
    // return 'Update data berhasil. Jumlah data yg diupdate: ' . $row . ' baris';
    // $row =DB::delete('delete from m_level where level_kode = ?', ['CUS']);
    // return 'Delete data berhasil. Jumlah data yg dihapus: '.$row. 'baris';
    // $data =DB::select('select * from m_level');
    // return view ('level',['data'=>$data]);
}
