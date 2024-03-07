<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JamesController extends Controller
{
    public function index()
    {
        $data = [
            "jamesdata" => DB::table('tbl_user')->get()
        ];
        return view ('welcome', $data);
    }

    public function create()
    {
        return view ('create');
    }
        public function delete(Request $james)
        {
        DB::table('tbl_user')->where('id', $james->id)->delete();
    }

    public function update($id){
        $data = [
            'dataupdate' => $id
        ];
        return view('Update', $data);
    }

    public function edit(Request $james){
        DB::table('tbl_user')->where('id', $james->id)->update([
            "name" => $james->namamu,
            "hp" => $james->hpmu,
        ]);
    }

    public function insert(Request $james){
        DB::table('tbl_user')->insert([
            "name" => $james->namamu,
            "hp" => $james->hpmu,
            "id" => $james->idmu,
        ]);
    }

    public function view($id){
        $data = [
            'viiew' => DB::table('tbl_user')->where('id', $id)->get()
        ];
        return view ('view', $data);
    }
}
