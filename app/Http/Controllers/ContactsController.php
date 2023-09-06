<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

class ContactsController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contacts.index', compact('contacts'));
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('admin.contacts.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
        ],[
            'nama.required' => 'Nama Tidak Boleh Kosong',
        ]);

        Contact::where('id', $id)
            ->update([
            'nama' => $request->nama

        ]);
        return redirect('/contacts')->with('status','Data Berhasil Diubah!');
    }
}
