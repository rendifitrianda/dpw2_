<?php

namespace App\Http\Controllers;

use App\http\Controllers\Controller;
use App\Models\Produk;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
 function index()
  {
    $data['list_produk'] = Produk::all();
 return view('produk.index',$data);
  }

 function create()
  {
    return view('produk.create');
  }

 function store()
 {
     $produk = new Produk;
     $produk->nama = request('nama');
     $produk->harga = request('harga');
     $produk->deskripsi = request('deskripsi');
     $produk->foto = request('foto');
     $produk->save();

     return redirect('admin/produk');
 }

    function show(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('Produk.show', $data);
    }

    function edit(Produk $produk)
{
    $data['produk'] = $produk;
    return view('produk.edit', $data);
}

    function update(produk $produk)
    {
     $produk->nama = request('nama');
     $produk->harga = request('harga');
     $produk->deskripsi = request('deskripsi');
     $produk->foto = request('foto');
     $produk->save();

     return redirect('admin/produk');
    }

    function destroy(produk $produk){
        $produk->delete();

        return redirect('admin/produk');
    }

}
