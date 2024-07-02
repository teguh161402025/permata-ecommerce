<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batu;
use App\Models\Rating;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller
{
      public function index(): View
    {
        $user = Session::get('user');;
        if($user){
        //get posts
        $results = DB::table('batus')
                    ->join('ratings', 'batus.id', '=', 'ratings.id_item')
                    ->select('batus.jenis', 'ratings.id_user', DB::raw('SUM(ratings.rating) AS total_rating'))
                    ->groupBy('batus.jenis', 'ratings.id_user')
                    ->orderBy('ratings.id_user')
                    ->get();
$data = [];

// Inisialisasi array untuk menyimpan jenis batu
$jenisBatu = ['Emerald', 'Ruby', 'Saphire', 'Diamond', 'Topaz', 'Opal', 'Citrine', 'Amethyse', 'Akik', 'Bacan'];

// Inisialisasi array baru untuk menyimpan data spesimen
$data_spesimen = [];

// Ambil semua hasil dari query
foreach ($results as $result) {
    // Ambil ID pengguna
    $userId = $result->id_user;

    // Jika ID pengguna belum ada di dalam array $data, inisialisasi array baru
    if (!isset($data[$userId])) {
        // Inisialisasi array dengan nilai 0 untuk semua jenis batu
        $data[$userId] = array_fill(0, count($jenisBatu), 0);
    }

    // Temukan indeks jenis batu dalam array $jenisBatu
    $jenisIndex = array_search($result->jenis, $jenisBatu);

    // Jika indeks ditemukan, tambahkan peringkat ke array untuk pengguna ini
    if ($jenisIndex !== false) {
        $data[$userId][$jenisIndex] = $result->total_rating;
    }
}

// Hitung rata-rata peringkat untuk setiap pengguna
foreach ($data as &$ratings) {
    // Hitung jumlah total peringkat untuk pengguna ini
    $totalRatingUser = array_sum($ratings);
    // Hitung rata-rata peringkat untuk pengguna ini
    $avgRatingUser = $totalRatingUser / count($ratings);

    // Kurangi masing-masing peringkat dari totalnya dengan rata-rata peringkat untuk pengguna ini
    for ($i = 0; $i < count($ratings); $i++) {
        $ratings[$i] -= $avgRatingUser;
    }
}

// Temukan ID pengguna yang akan dihapus
$id_user_to_remove = $user->id;

// Periksa apakah ID pengguna tersebut ada dalam array $data
if (isset($data[$id_user_to_remove])) {
    // Pindahkan data pengguna yang akan dihapus ke $data_spesimen
    $data_spesimen = $data[$id_user_to_remove];
    // Hapus data pengguna tersebut dari array $data
    unset($data[$id_user_to_remove]);
}

// Tampilkan hasil




   $pembilang = [];

// Lakukan perkalian untuk setiap jenis dalam $data
foreach ($data as $userId => $ratings) {
    // Inisialisasi pembilang untuk user ini
    $pembilang[$userId] = 0;

    // Loop through each rating for the user
    foreach ($ratings as $index => $rating) {
        // Kalikan rating dengan nilai yang sesuai dalam $data_spesimen
        $pembilang[$userId] += $rating * $data_spesimen[$index];
    }
}



$penyebut = [];

// Lakukan perhitungan untuk setiap id_user
foreach ($data as $userId => $ratings) {
    // Inisialisasi penyebut untuk user ini
    $penyebut[$userId] = 0;

    // Loop through each rating for the user
    foreach ($ratings as $index => $rating) {
        // Kuadratkan rating
        $ratingSquared = $rating * $rating;

        // Jumlahkan kuadrat rating
        $penyebut[$userId] += $ratingSquared;
    }

    // Akarkan hasil penjumlahan kuadrat rating
    $penyebut[$userId] = sqrt($penyebut[$userId]);
}

// Tampilkan hasil penyebut

$akar_spesimen = 0;

// Kuadratkan setiap nilai dalam $data_spesimen dan jumlahkan
foreach ($data_spesimen as $nilai) {
    // Kuadratkan nilai
    $kuadratNilai = $nilai * $nilai;
    
    // Tambahkan nilai kuadrat ke total
    $akar_spesimen += $kuadratNilai;
}

// Ambil akar kuadrat dari total
$akar_spesimen = sqrt($akar_spesimen);

// Tampilkan hasil akar_spesimen


// Tampilkan $penyebut yang sudah diubah nilainya

// Inisialisasi array $hasil_raw
$hasil_raw = [];

// Loop untuk setiap id_user dalam $pembilang
foreach ($pembilang as $id_user => $nilai) {
    // Bagikan nilai pembilang dengan penyebut untuk id_user tersebut
    $hasil_raw[$id_user] = $nilai / $penyebut[$id_user];
}

// Mengurutkan array hasil_raw berdasarkan nilai descending
arsort($hasil_raw);

// Menampilkan hasil_raw

$hasil = array_keys($hasil_raw);

// Menampilkan hasil (ID user)


$hasil = array_keys($hasil_raw);

// Mengambil 3 ID terbesar dalam sebuah array baru
$rekomendasi = [];
for ($i = 0; $i < 2; $i++) {
    $rekomendasi[] = $hasil[$i];
}

$id_users_string = implode(',', $rekomendasi);

// Membuat query menggunakan Query Builder
//$users = [76, 58, 94];

$results = DB::table('ratings')
    ->join('batus', 'ratings.id_item', '=', 'batus.id')
    ->whereIn('ratings.id_user', $rekomendasi)
    ->select('batus.*')
    ->distinct()
    ->get();
       return view('homepage', compact('results'));
// Menampilkan array baru yang berisi 3 ID terbesar

    }
    else{
        $results = null;
       return view('homepage', compact('results'));
}
}

}
