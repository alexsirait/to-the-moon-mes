<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HewanController extends Controller
{
    public function index()
    {
        $data = [
            "datahewan" => DB::table('tbl_hewan')-> get()
        ];
        return view('welcome', $data);
    }

    public function create()
    {
        return view('create');
    }

    public function delete(Request $hewan)
    {
        DB::table('tbl_hewan')->where('id', $hewan->id)->delete();
        return redirect('/');
    }

    public function update($id){
        $data = [
            'dataupdate' => $id
        ];
        return view('update', $data);
    }

    public function edit(Request $hewan){
        DB::table('tbl_hewan')->where('id', $hewan->id)->update([
            "nama" => $hewan->nama,
            "jenis" => $hewan->jenis,
        ]);
        return redirect('/');
    }

    public function insert(Request $hewan){
        DB::table('tbl_hewan')->insert([
            "id" => $hewan->id,
            "nama" => $hewan->nama,
            "jenis" => $hewan->jenis,
        ]);

        return redirect('/');
    }

    public function view($id){
        $data = [
            'Views' => DB::table('tbl_hewan')->where('id', $id)->get()
        ];
        return view('view', $data);
    }

}
