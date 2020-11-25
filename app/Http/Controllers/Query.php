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

    public function put($id){
        $tampil = laravel_advance::find($id);
        $nomor = intval($tampil->nomor);
        return view('view.ubah',compact('tampil'));
    }

    public function update(Request $req, $id){
        $info = laravel_advance::find($id);
        $info->nama = $req->nama;
        $info->kelas = $req->kelas;
        $info->nomor = $req->nomor;
        $info->update();
        return redirect('/');
    }
}
