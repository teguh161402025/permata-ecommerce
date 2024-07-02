<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batu;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
class CreateItemController extends Controller
{
     public function index()
    {
        return view('createItem');
    }
     public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama_batu' => 'required',
            'jenis' => 'required',
            'harga' => 'required|numeric',
            'rating' => 'required|numeric',
            'infopedia' => 'required',
             'kategori' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'detail' => 'required',
            'kategori' => 'required',
            'tag' => 'nullable|string'
        ]);

        // Simpan data ke dalam tabel batus
        $batu = new Batu();
        $batu->nama_batu = $validatedData['nama_batu'];
        $batu->jenis = $validatedData['jenis'];
        $batu->harga = $validatedData['harga'];
        $batu->kategori = $validatedData['kategori'];
        $batu->rating = $validatedData['rating'];
        $batu->infopedia = $validatedData['infopedia'];
        $batu->detail = $validatedData['detail'];
        $batu->kategori = $validatedData['kategori'];
         $batu->tag = $validatedData['tag'];
        
        if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar');
        $nama_gambar = time().'.'.$gambar->getClientOriginalExtension();
        $gambar->move(public_path('images'), $nama_gambar); // Memindahkan gambar ke public/images
          $batu->gambar =$nama_gambar;
    }
        $batu->save();

        return redirect()->route('createItem.index')->with('success', 'Data batu berhasil disimpan.');
    }
    
}
