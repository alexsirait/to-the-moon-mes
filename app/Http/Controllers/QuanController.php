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



    public function delete(Request $req)
    {
        DB::table('tbl_equipment')->where('id', $req->id)->delete();
        return response()->json("a");
    }

    public function update($id){
        $data = [
            'dataupdate' => DB::table('tbl_equipment')->where('id', $id)->first()
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

    public function show(Request $req)
    {
        $output = "";

        $q = "SELECT * FROM tbl_equipment WHERE id ILIKE '%$req->search%' ORDER BY id DESC";

        $data = DB::select($q);

        $output .=
        '
         <table class="table" id="tabel">
              <thead>
                  <tr>
                      <th>id</th>
                      <th>nama</th>
                      <th>Quantity</th>
                      <th>Action</th>
                  </tr>
                  <tbody>
         ';

         if($data){
            foreach ($data as $i){
                $output .= '
                 <tr>
                     <td>'. $i->id .'</td>
                     <td>'. $i->nama .'</td>
                     <td>'. $i->quantity .'</td>
                     <td>
                         <a href="/view/'.$i->id.'" title="view"><button class="btn btn-sm"><i  aria-hidden="true"></i>view</button></a>
                         <a title="edit"><button class="btn btn-sm" id="editbton" data-id="'. $i->id .'"><i  aria-hidden="true"></i>edit</button></a>
                         <a title="delete"> <button class="btn btn-sm" id="delbtn" data-id="'. $i->id .'">  <i  aria-hidden="true"></i>delete</button></a>
                     </td>
                 </tr>
             ';
            }
         }
        $output .= '</tbody></table>';
        return $output;
    }
}

