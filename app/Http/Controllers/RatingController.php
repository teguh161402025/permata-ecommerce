<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use App\Models\Batu;
use Illuminate\View\View;
class RatingController extends Controller
{
    //
     public function storeRating(Request $request)
    {
        $request->validate([
            'id_user' => 'required|integer',
            'id_item' => 'required|integer',
            'rating' => 'nullable|string',
             
        ]);

       
    // Periksa apakah rating dengan id_user dan id_item yang sama sudah ada di dalam database
    $existingRating = Rating::where('id_user', $request->id_user)
                             ->where('id_item', $request->id_item)
                             ->first();

    if ($existingRating) {
        // Jika sudah ada, lakukan update
        $existingRating->update([
            'rating' => $request->rating // Update rating jika diperlukan
        ]);
        $averageRating = Rating::where('id_item', $request->id_item)
                           ->avg('rating');
         Batu::where('id',$request->id_item)
         ->update(['rating' => $averageRating]);              
        // Kirim respons bahwa rating berhasil diperbarui
        return response()->json(['message' => 'Rating berhasil diperbarui.']);
    } else {
        // Jika belum ada, buat entri baru
        Rating::create($request->all());

        // Kirim respons bahwa rating berhasil ditambahkan
        return response()->json(['message' => 'Rating berhasil ditambahkan.']);
    }
    }
}
