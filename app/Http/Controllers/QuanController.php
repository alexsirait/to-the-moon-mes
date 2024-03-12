<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuanController extends Controller
{
    public function index()
    {
        $data = [
            "databarang" => DB::table('tbl_equipment')-> get()
        ];
        return view('welcome', $data);
    }

    public function create()
    {
        return view('create');
    }

    public function delete(Request $req)
    {
        DB::table('tbl_equipment')->where('id', $req->id)->delete();
        return response()->json("a");
    }

    public function update($id){
        $data = [
            'dataupdate' => $id
        ];
        return view('update', $data);
    }

    public function edit(Request $barang){
        DB::table('tbl_equipment')->where('id', $barang->id)->update([
            "nama" => $barang->nama,
            "quantity" => $barang->quantity,
        ]);

        return response()->json("a");
    }

    public function insert(Request $barang){
        DB::table('tbl_equipment')->insert([
            "id" => $barang->id,
            "nama" => $barang->nama,
            "quantity" => $barang->quantity,
        ]);
        return response()->json("a");
    }

    public function view($id){
        $data = [
            'views' => DB::table('tbl_equipment')->where('id', $id)->get()
        ];
        return view('view', $data);
    }
}
