<?php

namespace App\Http\Controllers;
use App\Models\Pendaftaran;

use Illuminate\Http\Request;

class PendaftaranController extends controller
{
    //
      public function create()
    {
        return view('pendaftaran');
    }

    public function store(Request $request)
    {
        // Validasi
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'hp' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'jk' => 'required',
            'tgl_lahir' => 'required|date',
            'file_upload' => 'nullable|file|max:2048',
        ]);

        // Upload file
        if ($request->hasFile('file_upload')) {
            $data['file_upload'] = $request->file('file_upload')->store('uploads', 'public');
        }

        // Simpan ke database
       Pendaftaran::create($data);

        return redirect()->back()->with('success', 'Pendaftaran berhasil dikirim!');
    }
}
