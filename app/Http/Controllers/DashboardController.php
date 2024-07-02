<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Pesan;
class DashboardController extends Controller
{
 public function index(): View
    {
         $dates = Pesan::distinct()->select('tanggal')->where('aproval','=', 'belum')->paginate(10);
         $id_user =Pesan::all();
          
        return view('dashboard', compact('dates','id_user'));
    }

}
