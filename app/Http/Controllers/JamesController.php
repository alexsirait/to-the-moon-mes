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

    // public function store(Request $james)
    // {
    //     $input = $request->all();
    //     data::create($input);
    //     c->with('flash_massage', 'data added');
    // }
    public function insert(Request $james){
        DB::table('tbl_user')->insert([
            "name" => $james->namamu,
            "hp" => $james->hpmu,
            "id" => $james->idmu,
        ]);
    }

}
