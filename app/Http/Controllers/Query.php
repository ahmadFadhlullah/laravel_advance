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

}
