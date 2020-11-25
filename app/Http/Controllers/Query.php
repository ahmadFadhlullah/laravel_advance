<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\laravel_advance;

class Query extends Controller
{
    public function insert(Request $req){
        $database = new laravel_advance;
        $database->nama = $req->nama;
        $database->kelas = $req->kelas;
        $database->nomor = $req->nomor;
        $database->save();
        return redirect('/');
    }

    public function show(){
        $tampil = laravel_advance::all();
        $nomor = 0;
        return view('view.index',compact('tampil','nomor'));
    }

    public function delete($id){
        $info = laravel_advance::find($id);
        $info->delete();
        return redirect('/');
    }
}
