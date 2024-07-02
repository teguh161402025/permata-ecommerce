<?php

namespace App\Http\Controllers;
use App\Models\Pesan;
use App\Models\User;
use Illuminate\Http\Request;

class JanjiController extends Controller
{
   public function index(){

         $dates = Pesan::distinct()->select('tanggal')->where('aproval','=', 'sudah')->paginate(10);
         $id_user =Pesan::all();
          
        return view('janji', compact('dates','id_user'));
     }
}
