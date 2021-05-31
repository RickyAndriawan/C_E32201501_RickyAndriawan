<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rickycontroller extends Controller
{
    public function index(){
    	//return "assalamualaikum, nama saya RICKY, saya belajar CONTROLLER LARAVEL";
    	$nama = "RICKY ANDRIAWAN";

    	$pelajaran = ["MVC","LARAVEL","PEMROGRAMAN LANJUT"];

    	return view('ricky', compact('nama','pelajaran'));
    }

    public function create(){
    	return "RICKY sedang menampilkan form untuk menambah DATA USER";
    }

    public function store(Request $Request){
    	return "RICKY sedang menciptakan USER YANG BARU";
    }

    public function show($id){
    	return "RICKY mengambil satu data user dengan ID-" . $id;
    }

    public function edit($id){
    	return "RICKY menampilkan form untuk mengubah data edit dengan ID-" . $id;
    }

    public function update(Request $Request, $id){
    	return "RICKY sedang mengubah data user dengan ID-" . $id;
    }

    public function destroy($id){
    	return "RICKY menghapus data user dengan ID-" . $id;
    }
}
