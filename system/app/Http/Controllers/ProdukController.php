<?php

namespace App\Http\Controllers;
use App\Models\Produk;


class ProdukController extends Controller {
    function index(){
        $data['list_produk'] = produk::all();
        return view('produk.index', $data);
    }
    function create(){
        return view('produk.create');

    }
    function store(){
        $produk = new Produk;
        $produk->nama = request('nama');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->stok = request('stok');
        $produk->save();

        return redirect('produk')->with('success', 'Data Berhasil Ditambahkan');
    }
    function show(Produk $produk){
        $data['produk'] = $produk;    
        return view('produk.show', $data);
    }
    function edit(Produk $produk){
        $data['produk'] = $produk;    
        return view('produk.edit', $data);

    }
    function update(Produk $produk){
        $produk->nama = request('nama');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->stok = request('stok');
        $produk->save();

        return redirect('Produk');
    }
    function destroy(Produk $produk){
        $produk->delete();

        return redirect('produk')->with('danger', 'Data Berhasil Dihapus');
    }
} 