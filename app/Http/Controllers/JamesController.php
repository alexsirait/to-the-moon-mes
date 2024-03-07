<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JamesController extends Controller
{
    public function index()
    {
        $data = [
            "jamesData" => DB::table('tbl_user')->get()
        ];
        return view ('welcome', $data);
    }

    public function create()
    {
        return view ('create');
    }

    public function delete(Request $james){
        DB::table('tbl_user')->delete([
            "name" => $james->namamu,
            "hp" => $james->hpmu,
            "id" => $james->idmu,
        ]);
    }
    public function insert(Request $james){
        DB::table('tbl_user')->insert([
            "name" => $james->namamu,
            "hp" => $james->hpmu,
            "id" => $james->idmu,
        ]);
    }

}
