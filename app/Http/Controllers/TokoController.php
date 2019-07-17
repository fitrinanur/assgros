<?php

namespace App\Http\Controllers;

use App\Toko;
use Illuminate\Http\Request;

class TokoController extends Controller{
    private $toko;

    public function __construct(Toko $toko){
        $this->toko = $toko;

    }
    public function index(){
        $data = ["tokos" => $this->toko->paginate()];
        return view('pages.toko', $data);
    }
    public function create(){
        return view('pages.toko-create');
    }
    public function store(Request $request){
        $this->toko->create(array("nama"=>$request->nama));
        return redirect('toko')->with('status', 'Create toko berhasil');
    }
    public function edit($id){
        $toko = $this->toko->find($id);
        return view('pages.toko-edit',['toko' => $toko]);
    }
    public function update($id, Request $request){
        $toko = $this->toko->find($id);
        $toko -> nama = $request -> nama;
        $toko->save();
        return redirect('toko')->with('status', 'Update toko berhasil');
    }
    public function delete($id){
        $toko = $this->toko->find($id)->delete();
        return redirect('toko')->with('status', 'Delete toko berhasil');
    }
}