<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrangController extends Controller
{
    public function index()
    {
        $data = [
            "dataorang" => DB::table('tbl_orang')-> get()
        ];
        return view('welcome', $data);
    }

    public function create()
    {
        return view('create');
    }

    public function delete(Request $req)
    {
        DB::table('tbl_orang')->where('id', $req->id)->delete();
        return response()->json("a");
    }

    public function update($id){
        $data = [
            'dataupdate' => $id
        ];
        return view('update', $data);
    }

    public function edit(Request $orang){
        DB::table('tbl_orang')->where('id', $orang->id)->update([
            "name" => $orang->namamuuu,
            "lokasi" => $orang->lokasimuuu,
        ]);

        return response()->json("a");
    }

    public function insert(Request $orang){
        DB::table('tbl_orang')->insert([
            "id" => $orang->id,
            "name" => $orang->name,
            "lokasi" => $orang->lokasi,
        ]);
        return redirect('/');
    }

    public function view($id){
        $data = [
            'views' => DB::table('tbl_orang')->where('id', $id)->get()
        ];
        return view('view', $data);
    }

    public function listOrang(Request $req)
    {
            $pm = DB::table('tbl_orang')->get();
            return response()->json($pm);
    }

}
