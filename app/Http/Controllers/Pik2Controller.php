<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Pik2Controller extends Controller
{
    // 1. Halaman Utama (Landing Page PIK2)
    // 1. Halaman Utama (Landing Page PIK2)
    public function index()
    {
        session()->forget(['is_manager', 'manager_nama']);

        return view('index');
    }

    // 2. Simpan Form Promo dari Halaman Utama ke MySQL
    public function storePromo(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:100',
            'email'        => 'required|email|max:100',
            'no_telepon'   => 'required|string|max:30',
        ]);

        DB::table('promo_leads')->insert([
            'nama_lengkap' => $request->nama_lengkap,
            'email'        => $request->email,
            'no_telepon'   => $request->no_telepon,
            'created_at'   => now(),
        ]);

        return redirect('/#promo')->with('promo_success', true);
    }

    // 3. Halaman Data Cluster & Stok Perumahan
    public function perumahan()
    {
        $daftarRumah = DB::table('perumahan')->orderBy('id', 'asc')->get();

        return view('perumahan', compact('daftarRumah'));
    }

    // 4. Proses Login Manager (Menggunakan Session Server & MySQL)
    public function loginManager(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $manager = DB::table('managers')
            ->where('username', trim($request->username))
            ->first();

        // Sinkronisasi otomatis hash password demo 'admin123' jika masih memakai hash bawaan awal
        if ($manager && $manager->username === 'manager' &&$request->password === 'admin123'
            && $manager->password === '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi') {$newHash = Hash::make('admin123');
            DB::table('managers')->where('id', $manager->id)->update(['password' =>$newHash]);
            $manager->password =$newHash;
        }

        if ($manager && Hash::check($request->password,$manager->password)) {
            session([
                'is_manager'   => true,
                'manager_nama' => $manager->nama,
            ]);

            return redirect('/perumahan')->with('success', 'Berhasil login sebagai Manager.');
        }

        return redirect('/perumahan')->with('error', 'Username atau password Manager salah!');
    }

    // 5. Proses Logout Manager
    public function logoutManager()
    {
        session()->forget(['is_manager', 'manager_nama']);

        return redirect('/perumahan')->with('success', 'Anda telah keluar dari mode Manager.');
    }

    // 6. Tambah Data Unit Rumah (Khusus Manager)
    public function storePerumahan(Request $request)
    {
        if (!session('is_manager')) {
            return redirect('/perumahan')->with('error', 'Akses ditolak! Silakan login sebagai Manager.');
        }

        $request->validate([
            'cluster'    => 'required|string|max:100',
            'kode_unit'  => 'required|string|max:50',
            'nama_jalan' => 'required|string|max:150',
            'tipe_rumah' => 'required|string|max:100',
            'stok_rumah' => 'required|integer|min:0',
        ]);

        $duplikat = DB::table('perumahan')
            ->where('cluster', $request->cluster)
            ->where('kode_unit', trim($request->kode_unit))
            ->exists();

        if ($duplikat) {
            return redirect('/perumahan')->with('error', 'Unit "' . $request->kode_unit . '" di ' . $request->cluster . ' sudah terdaftar!');
        }

        DB::table('perumahan')->insert([
            'cluster'    => $request->cluster,
            'kode_unit'  => trim($request->kode_unit),
            'nama_jalan' => trim($request->nama_jalan),
            'tipe_rumah' => $request->tipe_rumah,
            'stok_rumah' => (int) $request->stok_rumah,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/perumahan')->with('success', 'Data unit perumahan berhasil ditambahkan!');
    }

    // 7. Update Data & Stok Unit Rumah (Khusus Manager)
    public function updatePerumahan(Request $request,$id)
    {
        if (!session('is_manager')) {
            return redirect('/perumahan')->with('error', 'Akses ditolak! Silakan login sebagai Manager.');
        }

        $request->validate([
            'cluster'    => 'required|string|max:100',
            'kode_unit'  => 'required|string|max:50',
            'nama_jalan' => 'required|string|max:150',
            'tipe_rumah' => 'required|string|max:100',
            'stok_rumah' => 'required|integer|min:0',
        ]);

        DB::table('perumahan')->where('id', $id)->update([
            'cluster'    => $request->cluster,
            'kode_unit'  => trim($request->kode_unit),
            'nama_jalan' => trim($request->nama_jalan),
            'tipe_rumah' => $request->tipe_rumah,
            'stok_rumah' => (int) $request->stok_rumah,
            'updated_at' => now(),
        ]);

        return redirect('/perumahan')->with('success', 'Data & stok unit berhasil diperbarui!');
    }

    // 8. Hapus Data Unit Rumah (Khusus Manager)
    public function destroyPerumahan($id)
    {
        if (!session('is_manager')) {
            return redirect('/perumahan')->with('error', 'Akses ditolak! Silakan login sebagai Manager.');
        }

        DB::table('perumahan')->where('id', $id)->delete();

        return redirect('/perumahan')->with('success', 'Data unit perumahan berhasil dihapus!');
    }
}