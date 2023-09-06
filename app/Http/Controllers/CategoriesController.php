<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;
use App\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view ('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'gambar' => 'required|mimes:jpeg|max:1000'
        ],[
            'kategori.required' => 'Nama Tidak Boleh Kosong',
            'gambar.required' => 'Gambar tidak boleh kosong.',
            'gambar.mimes' => 'File gambar harus memiliki format: jpeg.',
            'gambar.max' => 'File gambar memiliki ukuran terlalu besar (>1MB)'
        ]);

        if($request->hasfile('gambar')){
            $fileGambar = file_get_contents($_FILES['gambar']['tmp_name']); 
        }

        Category::create([
            'kategori' => $request->kategori,
            'gambar' => $fileGambar
        ]);

        return redirect('/categories')->with('status','Data Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view ('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kategori' => 'required',
            'gambar' => 'required|mimes:jpeg'
        ],[
            'kategori.required' => 'Nama Tidak Boleh Kosong',
            'gambar.required' => 'Gambar tidak boleh kosong.',
            'gambar.mimes' => 'File gambar harus memiliki format: jpeg.'
        ]);

        if($request->hasfile('gambar')){
            $fileGambar = file_get_contents($_FILES['gambar']['tmp_name']); 
        }

        Category::where('id', $id)
            ->update([
            'kategori' => $request->kategori,
            'gambar' => $fileGambar
        ]);

        return redirect('/categories')->with('status','Data Berhasil Diubah!');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect('/categories')->with('status','Data Berhasil Dihapus!');
    }
}
