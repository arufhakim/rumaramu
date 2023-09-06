<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Testimony;

class TestimoniesController extends Controller
{
    public function index()
    {
        $testimonies = Testimony::all();
        return view('admin.testimonies.index', compact('testimonies'));
    }

    public function create()
    {
        return view('admin.testimonies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'testimoni' => 'required',
            'foto' => 'required|mimes:jpeg|max:1000'
        ],[
                'nama.required' => 'Nama tidak boleh kosong.',
                'jabatan.required' => 'jabatan tidak boleh kosong.',
                'testimoni.required' => 'Kategori tidak boleh kosong.',
                'foto.required' => 'Foto tidak boleh kosong.',
                'foto.mimes' => 'File foto harus memiliki format: jpeg.',
                'foto.max' => 'File foto memiliki ukuran terlalu besar (>1MB)'
            ]);

        if($request->hasfile('foto')){
            $fileFoto = file_get_contents($_FILES['foto']['tmp_name']); 
        }
        
        Testimony::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'testimoni' => $request->testimoni,
            'foto' => $fileFoto
        ]);
        
        // Testimony::create($request->all());

        return redirect('/testimonies')->with('status','Data Berhasil Ditambahkan!');
    }

    public function show(Testimony $testimony)
    {
        return view('admin.testimonies.details', compact('testimony'));
    }

    public function edit(Testimony $testimony)
    {
        return view('admin.testimonies.edit', compact('testimony'));
    }

    public function update(Request $request, Testimony $testimony)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'testimoni' => 'required',
            'foto' => 'required|mimes:jpeg'
        ],[
                'nama.required' => 'Nama tidak boleh kosong.',
                'jabatan.required' => 'jabatan tidak boleh kosong.',
                'testimoni.required' => 'Kategori tidak boleh kosong.',
                'foto.required' => 'Silahkan upload ulang foto.',
                'foto.mimes' => 'File foto harus memiliki format: jpeg.'
            ]);

        if($request->hasfile('foto')){
            $fileFoto = file_get_contents($_FILES['foto']['tmp_name']); 
        }

        Testimony::where('id', $testimony->id)
            ->update([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'testimoni' => $request->testimoni,
                'foto' => $fileFoto
            ]);
        return redirect('/testimonies')->with('status','Data Berhasil Diubah!');
        
    }

    public function destroy(Testimony $testimony)
    {
        Testimony::destroy($testimony->id);
        return redirect('/testimonies')->with('status','Data Berhasil Dihapus!');
    }
}
