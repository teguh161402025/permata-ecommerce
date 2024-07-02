<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batu;

class ItemController extends Controller
{
    public function index()
    {
        $items = Batu::all();
        return view('itemAdmin', compact('items'));
    }
      public function destroy($id)
    {
        // Cari item berdasarkan ID
        $item = Batu::findOrFail($id);

        // Hapus item
        $item->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('item.index')->with('success', 'Data item berhasil dihapus.');
    }
     public function update(Request $request, $id)
    {
        // Validasi data yang diterima dari formulir
        $validatedData = $request->validate([
            'nama_batu' => 'required',
            'jenis' => 'required',
            'harga' => 'required|numeric',
            'rating' => 'required|numeric',
            'infopedia' => 'required',
            'detail' => 'required',
            'kategori' => 'required',
             'tag' => 'nullable|string'
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Temukan dan perbarui data barang berdasarkan ID
        $barang = Batu::findOrFail($id);
        $barang->nama_batu = $validatedData['nama_batu'];
        $barang->jenis = $validatedData['jenis'];
        $barang->harga = $validatedData['harga'];
        $barang->rating = $validatedData['rating'];
        $barang->infopedia = $validatedData['infopedia'];
        $barang->detail = $validatedData['detail'];
        $barang->kategori = $validatedData['kategori'];
        $barang->tag = $validatedData['tag'];
        // Perbarui gambar jika ada yang diunggah
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('public');
            $barang->gambar = $gambarPath;
        }

        $barang->save();

       return redirect()->route('edit', ['item'=> $barang,'id' => $id])->with('success', 'Data barang berhasil diperbarui.');
    }
      public function edit($id)
    {
        // Temukan barang berdasarkan ID
        $item = Batu::findOrFail($id);

        // Tampilkan view untuk mengedit barang
       return view('edit', compact('item', 'id'));
    }
}