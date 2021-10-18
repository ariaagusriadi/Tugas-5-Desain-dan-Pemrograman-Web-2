<?php 

namespace App\Http\Controllers;
use App\models\Produk;

class ProdukController extends Controller {

  function index(){
    $data['list_produk'] = Produk::all();
    return view('template.produk.index', $data);
  } 

  function store (){
    $produk = new Produk;
    $produk->nama = request('nama');
    $produk->harga = request('harga');
    $produk->berat = request('berat');
    $produk->stok = request('stok');
    $produk->deskripsi = request('deskripsi');
    $produk->save();
    return redirect('admin/produk')->with('success', 'data berhasil ditambahkan');
  }

  function create() {
    return view('template.produk.create');
  }

  function show(Produk $produk) {
    $data['produk'] = $produk;
    return view('template.produk.show', $data);
  }

  function edit(Produk $produk) {
    $data['produk'] = $produk;
    return view('template.produk.edit', $data);
  }

  function update(Produk $produk){
    $produk->nama = request('nama');
    $produk->harga = request('harga');
    $produk->berat = request('berat');
    $produk->stok = request('stok');
    $produk->deskripsi = request('deskripsi');
    $produk->save();
    return redirect('admin/produk')->with('success', 'data berhasil edit');

  }
  
  function destroy (Produk $produk){
    $produk->delete();

    return redirect('admin/produk')->with('danger', 'data berhasil dihapus');
  }

}