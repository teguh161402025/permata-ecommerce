<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;
use Carbon\Carbon;

class AprovalController extends Controller
{
     public function updateAproval(Request $request, $id)
    {
        // Temukan pesan berdasarkan ID
       
        // Ubah nilai kolom 'aproval' menjadi 'sudah' untuk pesan yang ditemukan
      Pesan::where('id',$id)->update(['aproval' => 'sudah']);
    

        // Redirect ke halaman admin setelah pembaruan berhasil
  return redirect()->route('dashboard');
    
    }

    public function tolakAproval(Request $request)
    {
        // Temukan pesan berdasarkan ID
       
        // Ubah nilai kolom 'aproval' menjadi 'sudah' untuk pesan yang ditemukan
      Pesan::where('id',$request->id)->update(['aproval' => 'ditolak','alasan'=> $request->alasan]);

        // Redirect ke halaman admin setelah pembaruan berhasil
     return redirect()->route('dashboard');
    }
}

?>