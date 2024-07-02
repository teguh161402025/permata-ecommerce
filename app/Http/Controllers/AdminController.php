<?php

namespace App\Http\Controllers;
use App\Models\Pesan;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
class AdminController extends Controller
{
    //
    public function index(){

        $dates = Pesan::distinct()
                ->select('tanggal')
                ->where('aproval', '=', 'belum')
                ->whereDate('tanggal', '>', Carbon::now())
                ->paginate(10);
         $id_user =Pesan::all();
          
        return view('dashboard', compact('dates','id_user'));
     }
}