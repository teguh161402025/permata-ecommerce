<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Batu;
use App\Models\User;
use App\Models\Pesan;
use App\Models\Rating;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class BatuController extends Controller
{
    //   public function index(): View
      public function index(): View
    {
        //get posts
        $batu = Batu::latest()->paginate(10);

        //render view with posts
        return view('belanja', compact('batu'));
    }
     public function show(Request $request,$jenis)
    {
        // Mengambil data berdasarkan ID yang diterima dari URL
        $batu = Batu::where('jenis', $jenis)->paginate(10);;

        // Menampilkan data
        return view('belanja', compact('batu'));
    }

    public function kategori(Request $request,$kategori)
    {
        // Mengambil data berdasarkan ID yang diterima dari URL
        $batu = Batu::where('kategori', $kategori)->paginate(10);;

        // Menampilkan data
        return view('belanja', compact('batu'));
    }

  

     public function pencarian(Request $request)
    {
        // Mengambil data berdasarkan ID yang diterima dari URL
        $batu = DB::table('batus')
                    ->where('nama_batu', 'like', '%'.$request->cari.'%')
                   ->paginate(10);
        // Menampilkan data
       return view('belanja', compact('batu'));
    }

      public function tag(Request $request)
    {
        // Mengambil data berdasarkan ID yang diterima dari URL
        $batu = DB::table('batus')
                    ->where('tag', 'like', '%'.$request->tag.'%')
                   ->paginate(10);
        // Menampilkan data
       return view('belanja', compact('batu'));
    }


    
     public function harga(Request $request)
    {
        // Mengambil data berdasarkan ID yang diterima dari URL
        $batu = DB::table('batus')
                    ->where('harga', '<', $request->harga)
                   ->paginate(10);
        // Menampilkan data
       return view('belanja', compact('batu'));
    }




     public function item(Request $request, $id)
    {
         $pesans = Pesan::select('tanggal', 'jam')->get();
            $tanggalPesans = [];

            // Lakukan iterasi pada hasil query
            foreach ($pesans as $pesan) {
                // Bentuk array untuk setiap baris hasil query
                $tanggalPesans[] = [
                    'tanggal' => $pesan->tanggal,
                    'jam' => $pesan->jam,
                ];
}
        // Mengambil data berdasarkan ID yang diterima dari URL
        $batu = Batu::find($id);
        $users = User::all();
$ratings = Rating::select('ratings.id_user',  'batus.jenis', \DB::raw('1 AS beli'))
    ->join('batus', 'ratings.id_item', '=', 'batus.id')
    ->groupBy('ratings.id_user', 'batus.jenis')
    ->get();
    
$results = Batu::join('ratings', 'batus.id', '=', 'ratings.id_item')
    ->select('batus.jenis')
    ->groupBy('batus.jenis')
    ->havingRaw('COUNT(DISTINCT ratings.id_user) >= 50 ')
    ->pluck('batus.jenis')
    ->toArray();

  $support  =  DB::table('batus')
    ->join('ratings', 'batus.id', '=', 'ratings.id_item')
    ->select('batus.jenis', DB::raw('COUNT(DISTINCT ratings.id_user) AS total'))
    ->groupBy('batus.jenis')
    ->havingRaw('COUNT(DISTINCT ratings.id_user) >= 50')
       ->pluck('total', 'jenis')
    ->toArray();

    //print_r($support);

$combinations = [];
$count = count($results);
for ($i = 0; $i < $count; $i++) {
    for ($j = $i + 1; $j < $count; $j++) {
        $combinations[] = [$results[$i], $results[$j]];
    }
}

// Print hasil kombinasi
//print_r($combinations);
$i = 0;

$kombinasi = [];
foreach ($combinations as $combination){
   $record = 0;

 foreach($users as $user ){
$data = DB::table('ratings')
    ->join('batus', 'ratings.id_item', '=', 'batus.id')
    ->select('ratings.id', 'ratings.id_user', 'batus.jenis', DB::raw('1 AS beli'))
    ->where('ratings.id_user', $user->id)
    ->whereIn('batus.jenis', [$combination[0], $combination[1]])
    ->groupBy('ratings.id_user', 'batus.jenis', 'ratings.id')
    ->get()
    ->toArray();


      
        //echo sizeof($data)  .'_'. 'id_user = '. $user->id . $combination[0] .','.$combination[1] ;
       // echo '<br>';
        if(sizeof($data) == 2){
            $record++;
            //echo $combination[0] .','.$combination[1];
           // echo $user->id;
         
        }
 }

    $kombinasi[$i] = $record;
   // echo $i;
    
    $i++;
    
}
$x= 0;
$confidence= [];
$last_comb = [];



foreach($combinations as $combination){

    if($kombinasi[$x] >=50){
        //$confidence  [$x] = $kombinasi[$x] /  $support[$combination[0]];
        $last_comb [] = [$combination[0],$combination[1]];
         $last_comb [] = [$combination[1],$combination[0]];
    }

   
  // echo  array_search($combination[0], $support) .'<br>' ;
   // echo $kombinasi[$x]  . '/' .  array_search($combination[$x], $support).'='. $kombinasi[$x] / array_search($combination[$x], $support) . '<br>';
    $x++;
}

$j= 0;
$comb_result = [];
foreach($last_comb as $data){
    $confidence  [$j] = $kombinasi[$j] /  $support[$data[0]];

    if($confidence [$j] >= 0.52){
        $comb_result [] = [$data[0],$data[1]];
    }
    $j++;
}


//print_r($comb_result);


//print_r($results);
//echo  $support['Akik'];
//echo array_search('Akik', $support);
//print_r($confidence);
//echo $combinations[2][0];
        // Menampilkan data
        return view('item', ['batu' => $batu,'tanggalPesans' => $tanggalPesans,'apriori' => $comb_result]);
    }
}
