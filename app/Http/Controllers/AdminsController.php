<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\Rules\MatchOldPassword;

class AdminsController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.admins.index', compact('users'));
    }

    public function create()
    {
        return view('admin.admins.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => ['same:password']
        ],[
            'nama.required' => 'Nama Tidak Boleh Kosong',
            'email.required' => 'Email Tidak Boleh Kosong',
            'password.required' => 'Password Tidak Boleh Kosong',
            'confirm_password.required' => 'Password Tidak Sama'
        ]);

        User::create([
            'role' => 'admin',
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'remember_token' => Str::random(60)
        ]);
        
        return redirect('/admins')->with('status','Data Berhasil Ditambahkan!');

    }

    public function edit($id)
    {   
        $user = User::find($id);
        return view('admin.admins.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'current_password' => ['required', new MatchOldPassword],
            'password' => 'required',
            'confirm_password' => ['same:password']
        ],[
            'nama.required' => 'Nama Tidak Boleh Kosong',
            'email.required' => 'Email Tidak Boleh Kosong',
            'password.required' => 'Password Tidak Boleh Kosong',
            'confirm_password.required' => 'Password Tidak Sama'
        ]);

        User::where('id', $id)
            ->update([
            'role' => 'admin',
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'remember_token' => Str::random(60) 
        ]);

        return redirect('/admin')->with('status','Data Berhasil DiUbah!');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/admins')->with('status','Data Berhasil Dihapus!');
    }
}
