<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JamesController extends Controller
{
    public function insert(Request $james){
        DB::table('tbl_user')->insert([
            "name" => $james->namamu,
            "hp" => $james->hpmu,
            "id" => $james->idmu,
        ]);
    }

    public function show(Request $james){
        $data = DB::table('tbl_user')->get();
        return response()->json($data);
    }
}

