<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Category;

class ProductsController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'categories_id' => 'required',
            'harga' => 'required|numeric|max:1000000000',
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:jpeg|max:1000'
        ],[
                'nama.required' => 'Nama tidak boleh kosong.',
                'categories_id.required' => 'Kategori tidak boleh kosong.',
                'deskripsi.required' => 'Deskripsi tidak boleh kosong.',
                'harga.required' => 'Harga tidak boleh kosong.',
                'harga.numeric' => 'Harga hanya berbentuk nominal.',
                'harga.max' => 'Harga hanya bisa < 1 Miliar.',
                'gambar.required' => 'Gambar tidak boleh kosong.',
                'gambar.mimes' => 'File gambar harus memiliki format: jpeg.',
                'gambar.max' => 'File gambar memiliki ukuran terlalu besar (>1MB)'
            ]);
        
        if($request->hasfile('gambar')){
            $fileGambar = file_get_contents($_FILES['gambar']['tmp_name']); 
        }
        
        Product::create([
            'nama' => $request->nama,
            'categories_id' => $request->categories_id,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'gambar' => $fileGambar
        ]);
        
        // Product::create($request->all());
        return redirect('/products')->with('status','Data Berhasil Ditambahkan!');
    }

    public function show(Product $product)
    {
        return view('admin.products.details', compact('product'));
    }

    public function edit(Product $product)
    {   
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'nama' => 'required',
            'categories_id' => 'required',
            'harga' => 'required|numeric|max:1000000000',
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:jpeg'
        ],[
                'nama.required' => 'Nama tidak boleh kosong.',
                'categories_id.required' => 'Kategori tidak boleh kosong.',
                'deskripsi.required' => 'Deskripsi tidak boleh kosong.',
                'harga.required' => 'Harga tidak boleh kosong.',
                'harga.numeric' => 'Harga hanya berbentuk nominal.',
                'harga.max' => 'Harga hanya bisa < 1 Miliar.',
                'gambar.required' => 'Silahkan upload ulang gambar produk ini.',
                'gambar.mimes' => 'File gambar harus memiliki format: jpeg.'
            ]);

        if($request->hasfile('gambar')){
            $fileGambar = file_get_contents($_FILES['gambar']['tmp_name']); 
        }

        Product::where('id', $product->id)
            ->update([
                'nama' => $request->nama,
                'categories_id' => $request->categories_id,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi,
                'gambar' => $fileGambar
            ]);

        return redirect('/products')->with('status','Data Berhasil Diubah!');
    }
    
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect('/products')->with('status','Data Berhasil Dihapus!');
    }
}
