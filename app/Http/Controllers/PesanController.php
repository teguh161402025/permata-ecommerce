<?php

namespace App\Http\Controllers;
use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
     public function store(Request $request)
    {
        // Validasi data yang diterima dari form
      
        // Buat objek Pesan baru

        // Simpan pesan ke dalam database
     

        $existingPesan = Pesan::where('tanggal', $request->tanggal)
                          ->where('id_user', $request->id_user)
                          ->where('id_item', $request->id_item)
                          ->first();

    // Jika data sudah ada, kirim pesan ke view
    if ($existingPesan) {
        return redirect()->back()->with('error', 'Data dengan tanggal yang sama sudah ada.');
    }
    else{
        
          Pesan::create($request->all());
         // kalo berhasil arahkan ke halaman login
        return redirect()->route('item', ['id' => $request->id_item ])->with('success', 'Berhasil Membuat Janji Pemesanan');
    }
    }
}
