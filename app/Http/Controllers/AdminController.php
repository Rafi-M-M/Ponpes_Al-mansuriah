<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Models\Pendaftaran; 

class AdminController extends Controller
{
    public function showLogin()
    {
        return view('halaman_admin.login_admin');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $request->email)
                    ->orWhere('username', $request->email)
                    ->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            session(['admin_id' => $admin->id]);
            return redirect('/home_admin');
        }

        return back()->withErrors(['login' => 'Email atau password salah.']);
    }

    public function showRegister()
    {
        return view('halaman_admin.register_admin');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'username' => 'required|unique:admins',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6',
        ]);

        Admin::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login_admin')->with('success', 'Registrasi berhasil. Silakan login.');
    }

    public function dataPendaftaran()
    {
        $pendaftarans = Pendaftaran::all();
        return view('halaman_admin.data_pendaftaran', compact('pendaftarans'));
    }

    // Method untuk menampilkan data pendaftaran di dashboard admin
    public function dashboard()
    {
        $pendaftarans = Pendaftaran::latest()->take(5)->get(); // contoh: ambil 5 data terbaru
        return view('halaman_admin.home_admin', compact('pendaftarans'));
    }

    public function destroy($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->delete();
        return redirect()->route('admin.pendaftaran')->with('success', 'Data pendaftaran berhasil dihapus.');
    }
}

