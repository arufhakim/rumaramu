<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Complaint;

class ComplaintsController extends Controller
{
    public function index()
    {
        $complaints = Complaint::all();
        return view('admin.complaints.index', compact('complaints'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'whatsapp' => 'required|numeric|digits_between:11,13',
            'keluhan' => 'required',
        ],[
                'nama.required' => 'Mohon untuk diisi.',
                'whatsapp.required' => 'Mohon untuk diisi.',
                'whatsapp.numeric' => 'Nomor anda tidak valid.',
                'whatsapp.digits_between' => 'Nomor anda tidak valid.',
                'keluhan.required' => 'Mohon untuk diisi.'
            ]);
        
        Complaint::create([
            'nama' => $request->nama,
            'whatsapp' => $request->whatsapp,
            'keluhan' => $request->keluhan
        ]);
        
        // Complaint::create($request->all());

        return redirect('/faq')->with('status','Terima Kasih atas Sarannya');
    }

    public function show(Complaint $complaint)
    {
        return view('admin.complaints.details', compact('complaint'));
    }

    public function destroy(Complaint $complaint)
    {
        Complaint::destroy($complaint->id);
        return redirect('/complaints')->with('status','Data Berhasil Dihapus!');
    }
}
