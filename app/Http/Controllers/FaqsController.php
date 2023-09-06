<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Faq;

class FaqsController extends Controller
{

    public function index()
    {
        $faqs = Faq::all();
        return view('admin.faqs.index', compact('faqs'));
    }

    public function create()
    {
        return view('admin.faqs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pertanyaan' => 'required',
            'jawaban' => 'required'
        ],[
                'pertanyaan.required' => 'Pertanyaan tidak boleh kosong.',
                'jawaban.required' => 'Jawaban tidak boleh kosong.',
            ]);
        
        Faq::create($request->all());
        return redirect('/faqs')->with('status','Data Berhasil Ditambahkan!');
    }

    public function show(Faq $faq)
    {
        return view('admin.faqs.index', compact('faq'));
    }

    public function edit(Faq $faq)
    {
        return view('admin.faqs.edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'pertanyaan' => 'required',
            'jawaban' => 'required'
        ],[
                'pertanyaan.required' => 'Pertanyaan tidak boleh kosong.',
                'jawaban.required' => 'Jawaban tidak boleh kosong.',
            ]);

        Faq::where('id', $faq->id)
            ->update([
                'pertanyaan' => $request->pertanyaan,
                'jawaban' => $request->jawaban
            ]);
        return redirect('/faqs')->with('status','Data Berhasil Diubah!');
    }

    public function destroy(Faq $faq)
    {
        Faq::destroy($faq->id);
        return redirect('/faqs')->with('status','Data Berhasil Dihapus!');
    }
}
