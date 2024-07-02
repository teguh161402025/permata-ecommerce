<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Pesan;
use Illuminate\Support\Facades\Session;
class permataAndaController extends Controller
{
     public function index(){

          $tanggalSekarang = Carbon::now();
$user = Session::get('user');
          $dates = Pesan::distinct()
                    ->select('tanggal')
                    ->where('id_user','=',$user->id)
                        ->where('aproval','=','sudah')
                    ->whereDate('tanggal', '>', $tanggalSekarang)
                        ->orderByDesc('tanggal')
                    ->paginate(10);
          return view('permataAnda',compact('dates'));
     }

          public function destroy($id)
    {
        // Cari item berdasarkan ID
        $pesan = Pesan::findOrFail($id);

        // Hapus item
        $pesan->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('permata_anda')->with('success', 'Berhasil Dibatalkan');
    }

      public function setuju(){

          $tanggalSekarang = Carbon::now();
               $user = Session::get('user');
          $dates = Pesan::distinct()
                    ->select('tanggal')
                    ->where('id_user','=',$user->id)
                    ->where('aproval','=','sudah')
                   
                    ->paginate(10);

          return view('permataAnda',compact('dates'));
     }

      public function ditolak(){

          $tanggalSekarang = Carbon::now();
$user = Session::get('user');
          $dates = Pesan::distinct()
                    ->select('tanggal')
                    ->where('id_user','=',$user->id)
                    ->where('aproval','=','ditolak')
                   
                    ->paginate(10);

          return view('permataAnda',compact('dates'));
     }

      public function history(){

          $tanggalSekarang = Carbon::now();
$user = Session::get('user');
          $dates = Pesan::distinct()
                    ->select('tanggal')
                    ->where('id_user','=',$user->id)
                    ->paginate(10);

          return view('permataAnda',compact('dates'));
     }
           public function aktivitas(){

          $user = Session::get('user');
          $dates = Pesan::distinct()
                    ->select('tanggal')
                    ->where('id_user','=',$user->id)
                    ->paginate(10);

          return view('permataAnda',compact('dates'));
     }

}
