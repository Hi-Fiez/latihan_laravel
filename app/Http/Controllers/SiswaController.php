<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SiswaController extends Controller
{
    public function siswa(){
    	
    $nama = ['Mona','Budi','Mina','Joni','Made'];
    return view('siswa')->with($nama);

}
}
